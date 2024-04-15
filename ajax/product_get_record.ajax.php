<?php
require_once "../controllers/products.controller.php";
require_once "../models/products.model.php";
class AjaxProduct{
    public $productid;
    public function ajaxGetProduct(){
      $item = "productid";
      $value = $this->productid;
      $answer = (new ControllerProduct)->ctrGetProduct($item, $value);
      echo json_encode($answer);
    }
}
 
if(isset($_POST["productid"])){
  $getProduct = new AjaxProduct();
  $getProduct -> productid = $_POST["productid"];
  $getProduct -> ajaxGetProduct();
}