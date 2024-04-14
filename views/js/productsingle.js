$(function() {
    $('#product-form input[id^="num"]').on("keypress", function (e) {
       return _helper.isNumeric(e) ? true : e.preventDefault();
    });
 
    $('#product-form input[id^="tns"]').on("keypress", function (e) {
       return _helper.allChars(e) ? true : e.preventDefault();
    });    
 
    $("#btn-new-product").click(function(){
          $("#tns-cname").focus();
       swal.fire({
           title: 'Do you want create new product details?e???',
           type: 'question',
           showCancelButton: true,
           confirmButtonText: 'Yes',
           cancelButtonText: 'Cancel!',
           confirmButtonClass: 'btn btn-outline-success',
           cancelButtonClass: 'btn btn-outline-danger',
           allowOutsideClick: false,
           buttonsStyling: false
       }).then(function(result) {
         if (result.value) {
             window.location.href = './productnew'; // Replace 'your_target_page_url' with the URL you want to redirect to
         }
      });
    });
 
    // SAVE CLIENT
    $("#product-form").submit(function (e) {
       e.preventDefault();
       
       var title = "Do you want to update product details!!!!!!!!!?";
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
             var productname = $("#tns-product-name").val();
             var productabbriviation = $("#tns-product-abbriviation").val();
             var productqty = $("#num-product-qty").val();
             var productprice = $("#num-product-price").val();
             var productcategory = $("#tns-product-category").val();
             var productbrand = $("#tns-product-brand").val();
                         
             var product = new FormData();
 
             product.append("productname", productname);
             product.append("abbriviation", productabbriviation);
             product.append("productprice", productprice);
             product.append("productcategory", productcategory);
             product.append("productbrand", productbrand);
             product.append("productqty", productqty);
 
             $.ajax({
                url:"ajax/product_add_record.ajax.php",
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
                       $("#btn-new-product").click();
                     }
                  })
                }
             })
           }
       });
    });
 
    $('.productTable tbody').on('dblclick', 'tr', function () {
       var productid = $(this).attr("productid");
       var data = new FormData();
       data.append("productid", productid);
       $.ajax({
          url:"ajax/product_get_record.ajax.php",
          method: "POST",
          data: data,
          cache: false,
          contentType: false,
          processData: false,
          dataType:"json",
          success:function(answer){
           // This alert proves that record has been successfully fetched from the products table
           alert(answer["cname"]);
           // You task here is to display the record in the product form, then
           // Continue with editing record...
 
           $("#trans_type").val("Update");
           $("#modal-search-product").modal('hide');
         }
       })
    });
 
    $("#btn-print-products").click(function(){
      window.open("extensions/tcpdf/pdf/product_list.php", "_blank");
    });          
 
    function initializeForm(){
      $("#trans_type").val('New');
      $("#tns-product-name").val('');
      $("#tns-product-abbriviation").val('');
      $("#num-product-qty").val('');
      $("#num-product-price").val('');
      $("#tns-product-category").val('');
      $("#tns-product-brand").val('');
    }    	
 });    