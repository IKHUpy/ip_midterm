<?php
require_once "../controllers/products.controller.php";
require_once "../models/products.model.php";

class productsTable{
	public function showProductsTable(){
		$products = (new ControllerProducts)->ctrShowProducts();
		if(count($products) == 0){
			$jsonData = '{"data":[]}';
			echo $jsonData;
			return;
		}
		$jsonData = '{
			"data":[';
				for($i=0; $i < count($products); $i++){
		  			$buttons =  "<div class='btn-group'><button class='btn btn-light btn-sm waves-effect waves-light m-1 addProduct recoverButton' idProduct='".$products[$i]["id"]."' pdesc='".$products[$i]["pdesc"]."' price='".$products[$i]["price"]."' prodid='".$products[$i]["prodid"]."'><i class='fa fa-plus'></i></button></div>";

					$jsonData .='[
						"'.$products[$i]["pdesc"].'",
						"'.$products[$i]["price"].'",
						"'.$buttons.'"
					],';
				}
				$jsonData = substr($jsonData, 0, -1);
				$jsonData .= '] 
			}';
		echo $jsonData;
	}
}

$productList = new productsTable();
$productList -> showProductsTable();