
$("#btn-del-product").click(function(){
    console.log("product id: ", getParameterByName('productid'));
    var title = "Do you want to delete product details?";
    var text = "";

    swal.fire({
        title: title,
        text: text,
        type: 'question',
        showCancelButton: true,
        confirmButtonText: 'Yes, Delete it!',
        cancelButtonText: 'Cancel!',
        confirmButtonClass: 'btn btn-outline-success',
        cancelButtonClass: 'btn btn-outline-danger',
        allowOutsideClick: false,
        buttonsStyling: false
    }).then(function(result) {
        if(result.value) {
            var product = new FormData()
          product.append("productid", getParameterByName('productid'));
          $.ajax({
             url:"ajax/product_delete_record.ajax.php",
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
                  title: 'Product details successfully deleted!',
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