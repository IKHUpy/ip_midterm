$(function() {
   $('#client-form input[id^="num"]').on("keypress", function (e) {
      return _helper.isNumeric(e) ? true : e.preventDefault();
   });

   $('#client-form input[id^="tns"]').on("keypress", function (e) {
      return _helper.allChars(e) ? true : e.preventDefault();
   });    

   $("#btn-new").click(function(){
   	  $("#tns-product-name").focus();
      swal.fire({
          title: 'Do you want create new product detailsss?',
          type: 'question',
          showCancelButton: true,
          confirmButtonText: 'Yes',
          cancelButtonText: 'Cancel!',
          confirmButtonClass: 'btn btn-outline-success',
          cancelButtonClass: 'btn btn-outline-danger',
          allowOutsideClick: false,
          buttonsStyling: false
      }).then(function(result) {
          if(result.value) {
          	initialize();
          }
     });
   });

   function initialize(){
     $("#tns-product-name").val('');
     $("#tns-product-abbriviation").val('');
     $("#num-product-qty").val('');
     $("#num-product-price").val('');
     $("#tns-product-category").val('');
     $("#tns-product-brand").val('');
     $("#num-isactive").val('');
     $("#date-product-licenseduedate").val('');
   } 

   $(".productlist").on("click", "tbody .btnEditProduct", function(){
     var idProduct = $(this).attr("idProduct");
     window.location = "index.php?route=productedit&idProduct="+idProduct;
   });     	
});    