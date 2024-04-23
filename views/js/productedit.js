function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}
function parseDate(dateString) {
  if (dateString === null) return "select date";
    var parts = dateString.split('-');
    return parts[1] + '/' + parts[2] + '/' + parts[0];
}
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('set-calendar-null').addEventListener('click', function() {
      var inputField = document.getElementById('date-product-licenseduedate');
        document.getElementById('date-product-licenseduedate').value = inputField.placeholder;
    });
});

var productname = getParameterByName('productname');
var abbriviation = getParameterByName('abbriviation');
var productprice = getParameterByName('productprice');
var productcategory = getParameterByName('productcategory');
var productbrand = getParameterByName('productbrand');
var productqty = getParameterByName('productqty');
var productallowtrans = getParameterByName('productallowtrans');
var checkbox = document.getElementById('num-isactive');

if (productallowtrans === '1') {
    checkbox.checked = true;
} else {
    checkbox.checked = false;
}
var productlicenseduedate = getParameterByName('productlicenseduedate');
var parsedDate = parseDate(productlicenseduedate);
$("#tns-product-name").val(productname);
$("#tns-product-abbriviation").val(abbriviation);
$("#num-product-price").val(productprice);
$("#tns-product-category").val(productcategory);
$("#tns-product-brand").val(productbrand);
$("#num-product-qty").val(productqty);
//$("#num-isactive").val(productallowtrans);
$("#date-product-licenseduedate").val(parsedDate);

 
$("#btn-edit-product").click(function(){
    
    var title = "Do you want to update product details?";
    var text = "";

    swal.fire({
        title: title,
        text: text,
        type: 'question',
        showCancelButton: true,
        confirmButtonText: 'Yes, Save it!',
        cancelButtonText: 'Cancel!',
        confirmButtonClass: 'btn btn-outline-success',
        cancelButtonClass: 'btn btn-outline-danger',
        allowOutsideClick: false,
        buttonsStyling: false
    }).then(function(result) {
        if(result.value) {
         console.log("'qwe product edit'");
          var productname = $("#tns-product-name").val();
          var productabbriviation = $("#tns-product-abbriviation").val();
          var productqty = $("#num-product-qty").val();
          var productprice = $("#num-product-price").val();
          var productcategory = $("#tns-product-category").val();
          var productbrand = $("#tns-product-brand").val();
          var productallowtrans = $("#num-isactive").val();
          var productlicenseduedate = $("#date-product-licenseduedate").val();
          var parts = productlicenseduedate.split('/');
          var parsedDate = new Date(parts[2], parts[0] - 1, parts[1]);
          productlicenseduedate = parsedDate.getFullYear() + '-' + 
         ('0' + (parsedDate.getMonth() + 1)).slice(-2) + '-' + 
         ('0' + parsedDate.getDate()).slice(-2);
          var product = new FormData();
          product.append("productid", getParameterByName('productid'));
          product.append("productname", productname);
          product.append("abbriviation", productabbriviation);
          product.append("productprice", productprice);
          product.append("productcategory", productcategory);
          product.append("productbrand", productbrand);
          product.append("productqty", productqty);
          product.append("productallowtrans", productallowtrans);
          product.append("productlicenseduedate", productlicenseduedate);
         
          $.ajax({
             url:"ajax/product_edit_record.ajax.php",
             method: "POST",
             data: product,
             cache: false,
             contentType: false,
             processData: false,
             dataType:"text",
             success:function(answer){
             },
             error: function () {
                alert("Oops. Something went wrong!");
             },
             complete: function () {
               swal.fire({
                  title: 'Product details successfully saved!!!',
                  type: 'success',
                  confirmButtonText: 'Got it!',
                  confirmButtonClass: 'btn btn-outline-success',
                  allowOutsideClick: false,
                  buttonsStyling: false
               }).then(function(result){
                  if(result.value) {            
                    window.location = "./products"  
                  }
               })
             }
          })
        }
    });
});