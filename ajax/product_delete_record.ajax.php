<?php
require_once "../controllers/products.controller.php";
require_once "../models/products.model.php";

class deleteProduct {
    public $productid;
    public function deleteProductRecord() {
        $productid = $this->productid;
        $data = array(
            "productid" => $productid,
        );
        $controllerProduct = new ControllerProduct();
        $answer = $controllerProduct->ctrDeleteProduct($data);
    }
}
$delete_product = new deleteProduct();
$delete_product -> productid = $_POST["productid"];
$delete_product -> deleteProductRecord();