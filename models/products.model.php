<?php
require_once 'connection.php';
class ProductsModel{
	static public function mdlShowProducts(){
		$stmt = (new Connection)->connect()->prepare("SELECT * FROM products ORDER BY pdesc ASC");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	
}