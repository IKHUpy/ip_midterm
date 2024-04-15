<?php
require_once "../controllers/productsingle.controller.php";
require_once "../models/productsingle.model.php";

class saveProduct{
  public $trans_type;
  public $productname;
  public $abbriviation;
  public $productprice;
  public $productbrand;
  public $productqty;
  public $productcategory;

  public function saveProductRecord(){
    $trans_type = $this->trans_type;

  	$productname = $this->productname;
  	$abbriviation = $this->abbriviation;
  	$productprice = $this->productprice;
    $productbrand = $this->productbrand;
  	$productcategory = $this->productcategory;
  	$productqty = $this->productqty;

    $data = array("productname"=>$productname,
    	            "abbriviation"=>$abbriviation,
                  "productid"=>$productprice,
                  "address"=>$productbrand,
                  "phone"=>$productcategory,
                  "mobile"=>$productqty);


  }
}

$save_product = new saveProduct();
$save_product -> trans_type = $_POST["trans_type"];

$save_product -> productname = $_POST["productname"];
$save_product -> abbriviation = $_POST["abbriviation"];
$save_product -> productprice = $_POST["productprice"];
$save_product -> productcategory = $_POST["productcategory"];
$save_product -> productbrand = $_POST["productbrand"];
$save_product -> productqty = $_POST["productqty"];

$save_product -> saveProductRecord();