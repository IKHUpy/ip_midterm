<?php
require_once "../controllers/sales.controller.php";
require_once "../models/sales.model.php";

class salesEntry{
  public $stime; 
  public $amount;
  public $productlist;

  public function salesEntrySave(){
    $stime = $this->stime;
    $amount = $this->amount;
  	$productlist = $this->productlist;

    $data = array("stime"=>$stime,
                  "amount"=>$amount,
                  "productlist"=>$productlist);

    $answer = (new ControllerSale)->ctrCreateSale($data);
  }
}

$processSales = new salesEntry();

$processSales -> stime = $_POST["stime"];
$processSales -> amount = $_POST["amount"];
$processSales -> productlist = $_POST["productlist"];

$processSales -> salesEntrySave();