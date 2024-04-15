// Parse the URL parameters
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

// Get the parameter values from the URL
var productname = getParameterByName('productname');
var abbriviation = getParameterByName('abbriviation');
var productprice = getParameterByName('productprice');
var productcategory = getParameterByName('productcategory');
var productbrand = getParameterByName('productbrand');
var productqty = getParameterByName('productqty');

// Set the field values
$("#tns-product-name").val(productname);
$("#tns-product-abbriviation").val(abbriviation);
$("#num-product-price").val(productprice);
$("#tns-product-category").val(productcategory);
$("#tns-product-brand").val(productbrand);
$("#num-product-qty").val(productqty);

 
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
                      
          var product = new FormData();
          product.append("productid", getParameterByName('productid'));
          product.append("productname", productname);
          product.append("abbriviation", productabbriviation);
          product.append("productprice", productprice);
          product.append("productcategory", productcategory);
          product.append("productbrand", productbrand);
          product.append("productqty", productqty);
          console.log(product.get("productid"));
         
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