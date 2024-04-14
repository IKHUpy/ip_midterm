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
	
		// Create an array with product data
		$productData = array(
			"productname" => $productname,
			"abbriviation" => $abbriviation,
			"productprice" => $productprice,
			"productqty" => $productqty,
			"productcategory" => $productcategory,
			"productbrand" => $productbrand
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

	static public function ctrShowProducts(){
		$answer = (new ModelProducts)->mdlShowProducts();
		return $answer;
	}

	static public function ctrEditProduct(){
		if(isset($_POST["tns-cname"])){
            if (isset($_POST['num-isactive'])){
			  $isactive=$_POST['num-isactive'];
			}else{
			  $isactive="0";
			}

		   	$table = "products";
		   	$data = array("id"=>$_POST["idProduct"],
		   		          "productid"=>$_POST["tns-productid"],
		   		          "isactive"=>$isactive,
		   				  "cname"=>$_POST["tns-cname"],
				          "email"=>$_POST["tns-email"],
				          "phone"=>$_POST["num-phone"],
				          "address"=>$_POST["tns-address"],
				          "website"=>$_POST["tns-website"],
				          "mobile"=>$_POST["num-mobile"],
				          "cperson"=>$_POST["tns-cperson"]);

		   	$answer = (new ModelProducts)->mdlEditProduct($table, $data);

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
}

