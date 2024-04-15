<?php
require_once "../controllers/products.controller.php";
require_once "../models/products.model.php";

class editProduct{
    public $productid;
  public $productname;
  public $abbriviation;
  public $productprice;
  public $productbrand;
  public $productqty;
  public $productcategory;

  public function editProductRecord(){
    // Get property values
    $productid = $this->productid;
    $productname = $this->productname;
    $abbriviation = $this->abbriviation;
    $productprice = $this->productprice;
    $productbrand = $this->productbrand;
    $productcategory = $this->productcategory;
    $productqty = $this->productqty;

    // Create an array with product data
    $data = array(
        "productid" => $productid,
        "productname" => $productname,
        "abbriviation" => $abbriviation,
        "productprice" => $productprice,
        "productbrand" => $productbrand,
        "productcategory" => $productcategory,
        "productqty" => $productqty
    );

    $controllerProduct = new ControllerProduct();
    $answer = $controllerProduct->ctrEditProduct($data);

  }
}

$edit_product = new editProduct();

$edit_product -> productid = $_POST["productid"];
$edit_product -> productname = $_POST["productname"];
$edit_product -> abbriviation = $_POST["abbriviation"];
$edit_product -> productprice = $_POST["productprice"];
$edit_product -> productcategory = $_POST["productcategory"];
$edit_product -> productbrand = $_POST["productbrand"];
$edit_product -> productqty = $_POST["productqty"];

$edit_product -> editProductRecord();