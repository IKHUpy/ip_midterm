<?php
class ControllerProducts{
	static public function ctrShowProducts(){
		$answer = (new ProductsModel)->mdlShowProducts();
		return $answer;
	}	
}