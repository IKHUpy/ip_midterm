<?php
require_once "../controllers/payroll.controller.php";
require_once "../models/payroll.model.php";

class AjaxPayrollTransactionList{ 
   public $emptype;

   public function ajaxDisplayPayrollTransactionList(){
   	 $emptype = $this->emptype;
     $answer = (new ControllerPayroll)->ctrShowPayrollList($emptype);
     echo json_encode($answer);
   }
}

$payroll = new AjaxPayrollTransactionList();
$payroll -> emptype = $_POST["emptype"];
$payroll -> ajaxDisplayPayrollTransactionList();