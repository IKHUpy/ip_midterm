$('.productsTable').DataTable({
	"ajax": "ajax/products.ajax.php", 
	"deferRender": true,
	"retrieve": true,
	"processing": true
});

dateTime();

$(".productsTable").on("click", "button.addProduct", function(){
	let idProduct = $(this).attr("idProduct");
  let pdesc = $(this).attr("pdesc");
  let price = $(this).attr("price");
  let prodid = $(this).attr("prodid");

	$(this).removeClass("btn-light btn-sm waves-effect waves-light m-1 addProduct");
	$(this).addClass("btn-danger btn-sm waves-effect waves-light m-1");

  $(".selected_products").append(
	  	'<div class="row no-gutter no-gutter-row" style="margin-left:5px;margin-right:5px;">'+   /*top-bottom, lef-right*/
		  '<!-- 	Product Description 	-->'+
	      '<div class="input-group input-group-sm mb-3 col-sm-6" style="padding-right:0px">'+
	          '<span class="input-group-addon"><button type="button" class="btn btn-sm btn-light waves-effect waves-light m-1 removeProduct" prodid="'+prodid+'"><i class="fa fa-minus"></i></button></span>'+
	          '<input type="text" class="form-control pdesc" prodid="'+prodid+'" name="addProduct" value="'+pdesc+'" readonly required>'+
	      '</div>'+

	      '<!-- 	Product Quantity 	-->'+
	      '<div class="input-group input-group-sm mb-3 col-sm-2 qtyEntry">'+
	         '<input type="text" class="form-control qty numeric" prodid="'+prodid+'" name="qty" value="" placeholder="0.00" required>'+
	      '</div>' +

	      '<!-- 	Product Price 	-->'+
	      '<div class="input-group input-group-sm mb-3 col-sm-2 priceEntry">'+	            
	         '<input type="text" class="form-control price" prodid="'+prodid+'" name="price" value="'+price+'" placeholder="0.00" required>'+
	      '</div>'+

	      '<!-- 	Total Amount 	-->'+
	      '<div class="input-group input-group-sm mb-3 col-sm-2 totalAmount" style="padding-left:0px">'+
	         '<input type="text" class="form-control tamount" productPrice="'+price+'" name="tamount" value="0.00" readonly required>'+
	      '</div>'+
	 '</div>')  

  	$('.qty').focus();
});

$("#gridForm").on("keydown keypress blur", "input.qty,input.price", function(){
    var prodid = $(this).parent().parent().children(".qtyEntry").children().attr("prodid");

    var q = $(this).parent().parent().children(".qtyEntry").children().val();
    var quantity = q.replaceAll(",","");

    var p = $(this).parent().parent().children(".priceEntry").children().val();
    var price = p.replaceAll(",","");   

    var totalAmount = quantity * price;
  
    var productAmount = $(this).parent().parent().children(".totalAmount").children(".tamount");
    productAmount.val(numberWithCommas(totalAmount.toFixed(2)));

    _gblBindNumericClasses('numeric');
    addingTotalPrices();
    listProduct();
})

$("#gridForm").on("click", "button.removeProduct", function(){
    $(this).parent().parent().parent().remove();

    var prodid = $(this).attr("prodid");
    $("button.recoverButton[prodid='"+prodid+"']").removeClass('btn-light btn-sm waves-effect waves-light m-1');
    $("button.recoverButton[prodid='"+prodid+"']").addClass('btn-light btn-sm waves-effect waves-light m-1 addProduct');

    addingTotalPrices();
    listProduct();
})

$("#gridForm").submit(function (e) {
    var stime = getCurrentTime();
    var txt_amount = $("#numTotalsales").val();
    var amount = parseFloat(txt_amount.replaceAll(",",""));
    var productlist = $("#productList").val();

    var sales = new FormData();
    sales.append("stime", stime);
    sales.append("amount", amount);
    sales.append("productlist", productlist); 

    $.ajax({
         url:"ajax/sale_save_record.ajax.php",
         method: "POST",
         data: sales,
         cache: false,
         contentType: false,
         processData: false,
         dataType:"text",
         success:function(answer){
            alert("Sales transaction successfully saved!");
         }    
    })
});

function listProduct(){
   var productList = [];
   var pdesc = $(".pdesc");
   var qty = $(".qty");
   var price = $(".price");
   var tamount = $(".tamount");
   for(var i = 0; i < pdesc.length; i++){
     productList.push({ "prodid" : $(pdesc[i]).attr("prodid"),
                        "qty" : $(qty[i]).val(),
                        "price" : $(price[i]).val(),
                        "tamount" : $(tamount[i]).val()})
   }
   $("#productList").val(JSON.stringify(productList));
}

function addingTotalPrices(){
    var priceItem = $(".tamount");
    if (priceItem.length > 0){
      var arrayAdditionPrice = [];  
      for(var i = 0; i < priceItem.length; i++){
          var num = $(priceItem[i]).val();
          var total_amount = parseFloat(num.replaceAll(",",""));
          arrayAdditionPrice.push(total_amount);
      }

      function additionArrayPrices(total, numberArray){
        return total + numberArray;
      }
      var addingTotalPrice = arrayAdditionPrice.reduce(additionArrayPrices);

      $("#numTotalsales").val(numberWithCommas(addingTotalPrice.toFixed(2)));
    }else{
      $("#numTotalsales").val('0.00');
    }   
}

function numberWithCommas(num) {
    var n = parseFloat(num).toFixed(2);
    var parts = n.toString().split(".");
    var number = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "." + parts[1];
    return number;
}

function dateTime(){
  // var today = new Date();

  // var month = today.toLocaleString('default', { month: 'long' });
  // var dd = String(today.getDate()).padStart(2, '0');
  // var yyyy = today.getFullYear();

  // var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
  // var dayName = days[today.getDay()]; 

  const myInterval = setInterval(myTimer, 1000);

  // today = month.toUpperCase() + ' ' + dd + ', ' + yyyy + '  [ ' + dayName.toUpperCase() + ' ] ';
  // $('#sdate').val(today);
}

function myTimer() {
   const date = new Date();
   $('#stime').val(date.toLocaleTimeString());
} 