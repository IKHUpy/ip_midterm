<?php

class ControllerProduct{
	static public function ctrCreateProduct($data){
		// Define the table name
		$table = "products";
	
		// Extract necessary data from $data array
		$productname = $data["productname"];
		$abbriviation = $data["abbriviation"];
		$productprice = $data["productprice"];
		$productqty = $data["productqty"];
		$productcategory = $data["productcategory"];
		$productbrand = $data["productbrand"];
		$productallowtrans = $data["productallowtrans"];
		$productlicenseduedate = $data["productlicenseduedate"];
	
		// Create an array with product data
		$productData = array(
			"productname" => $productname,
			"abbriviation" => $abbriviation,
			"productprice" => $productprice,
			"productqty" => $productqty,
			"productcategory" => $productcategory,
			"productbrand" => $productbrand,
			"productallowtrans" => $productallowtrans,
			"productlicenseduedate" => $productlicenseduedate
		);
	
		// Call the model method to add the product
		$answer = (new ModelProducts)->mdlAddProduct($table, $productData);
		   	if($answer == "ok"){
				echo'<script>
                    swal.fire({
			          title: "Product details successfully appended!!!!!!!!!!!!",
			          type: "success",
			          confirmButtonText: "Proceed",
			          confirmButtonClass: "btn btn-outline-success",
			          allowOutsideClick: false,
			          buttonsStyling: false,
			        }).then(function(answer){
			          if(result.value) {
                        window.location = "productadd";
			          }
			        })
			    </script>';    
			} else if ($answer == "error") {
				echo'<script>
                    swal.fire({
			          title: "linte!!!!!!!!!!!!",
			          type: "success",
			          confirmButtonText: "Proceed",
			          confirmButtonClass: "btn btn-outline-success",
			          allowOutsideClick: false,
			          buttonsStyling: false,
			        }).then(function(answer){
			          if(result.value) {
                        window.location = "productadd";
			          }
			        })
			    </script>';   
			}
	}
	static public function ctrGetProduct($item, $value){
		$answer = (new ModelProducts)->mdlGetProduct($item, $value);
		return $answer;
	}

	static public function ctrShowProducts(){
		$answer = (new ModelProducts)->mdlShowProducts();
		return $answer;
	}

	static public function ctrEditProduct($data){

			$table = "products";

			$productid = $data["productid"];
			$productname = $data["productname"];
			$abbriviation = $data["abbriviation"];
			$productprice = $data["productprice"];
			$productqty = $data["productqty"];
			$productcategory = $data["productcategory"];
			$productbrand = $data["productbrand"];
			$productallowtrans = $data["productallowtrans"];
			$productlicenseduedate = $data["productlicenseduedate"];
			
			$productData = array(
				"productid" => $productid,
				   "productname" => $productname,
				   "abbriviation" => $abbriviation,
				   "productprice" => $productprice,
				   "productqty" => $productqty,
				   "productcategory" => $productcategory,
				   "productbrand" => $productbrand,
				   "productallowtrans" => $productallowtrans,
				   "productlicenseduedate" => $productlicenseduedate
			   );

		   	$answer = (new ModelProducts)->mdlEditProduct($table, $productData);

		   	if($answer == "ok"){
				echo'<script>
                    swal.fire({
			          title: "Product details successfully updated!",
			          type: "success",
			          confirmButtonText: "Proceed",
			          confirmButtonClass: "btn btn-outline-success",
			          allowOutsideClick: false,
			          buttonsStyling: false,
			        }).then(function(answer){
			          if(result.value) {
                        window.location = "productadd";
			          }
			        })
			    </script>';    
			}
	}		
}

