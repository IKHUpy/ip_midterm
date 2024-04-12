<?php
class ControllerSale{
	static public function ctrCreateSale($data){
	   	$answer = (new ModelSale)->mdlAddSale($data);
	}
}