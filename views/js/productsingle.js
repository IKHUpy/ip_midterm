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
           title: 'Do you want create new product details?@@?',
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
       
       var title = "Do you want to update product details?===";
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
            console.log("'qw product sqwlekqlkinglee'");
             var productname = $("#tns-product-name").val();
             var productabbriviation = $("#tns-product-abbriviation").val();
             var productqty = $("#num-product-qty").val();
             var productprice = $("#num-product-price").val();
             var productcategory = $("#tns-product-category").val();
             var productbrand = $("#tns-product-brand").val();
             var productallowtrans = $("#num-isactive").val();
             productallowtrans = productallowtrans == 1 ? 1 : 0;
             var productlicenseduedate = $("#date-product-licenseduedate").val();
             var parts = productlicenseduedate.split('/');
             var parsedDate = new Date(parts[2], parts[0] - 1, parts[1]);
             productlicenseduedate = parsedDate.getFullYear() + '-' + 
            ('0' + (parsedDate.getMonth() + 1)).slice(-2) + '-' + 
            ('0' + parsedDate.getDate()).slice(-2);
            console.log("Formatted Product License Due Date:", productlicenseduedate);
                         
console.log("Product Allow Transactions:", productallowtrans);
console.log("Product License Due Date:", productlicenseduedate);
             var product = new FormData();
             product.append("productname", productname);
             product.append("abbriviation", productabbriviation);
             product.append("productprice", productprice);
             product.append("productcategory", productcategory);
             product.append("productbrand", productbrand);
             product.append("productqty", productqty);
             product.append("productallowtrans", productallowtrans);
             product.append("productlicenseduedate", productlicenseduedate);
            
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
                        window.location = "products";  
                     }
                  })
                }
             })
           }
       });
    });
 
    $('.productlist').on("click", "tbody .btnEditProduct", function () {
        var productid = $(this).attr("idproduct");
        var data = new FormData();
        data.append("productid", productid);
        console.log("data.productid = ", data.get("productid"));
       $.ajax({
          url:"ajax/product_get_record.ajax.php",
          method: "POST",
          data: data,
          cache: false,
          contentType: false,
          processData: false,
          dataType:"json",
          success:function(answer){
            if ($.isEmptyObject(answer)) {
                console.log("No data returned from the server");
            } else {
                var url = "./productedit?";
                url += "productid=" + encodeURIComponent(answer[0]["productid"]);
                url += "&productname=" + encodeURIComponent(answer[0]["productname"]);
                url += "&abbriviation=" + encodeURIComponent(answer[0]["abbriviation"]);
                url += "&productprice=" + encodeURIComponent(answer[0]["productprice"]);
                url += "&productcategory=" + encodeURIComponent(answer[0]["productcategory"]);
                url += "&productbrand=" + encodeURIComponent(answer[0]["productbrand"]);
                url += "&productqty=" + encodeURIComponent(answer[0]["productqty"]);
                
                window.location.href = url;
            }
         },
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