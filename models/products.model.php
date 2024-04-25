<?php

require_once "connection.php";

class ModelProducts{
	static public function mdlAddProduct($table, $data){
        $cust_id = (new Connection)->connect()->prepare("SELECT CONCAT('P', LPAD(IFNULL((SELECT MAX(id) + 1 FROM products), 1), 4, '0')) AS gen_id FROM products FOR UPDATE");

        $cust_id->execute();
		$custid = $cust_id -> fetchAll(PDO::FETCH_ASSOC);
		
		$stmt = (new Connection)->connect()->prepare("INSERT INTO $table(productid, productname, abbriviation, productprice, productcategory, productbrand, productqty, productallowtrans, productlicenseduedate) 
		VALUES (:productid, :productname, :abbriviation, :productprice, :productcategory, :productbrand, :productqty, :productallowtrans, :productlicenseduedate)");
			
		$productPrice = number_format($data["productprice"], 2);
		
		$stmt->bindParam(":productid", $custid[0]['gen_id'], PDO::PARAM_STR);
		$stmt->bindParam(":productname", $data["productname"], PDO::PARAM_STR);
		$stmt->bindParam(":abbriviation", $data["abbriviation"], PDO::PARAM_STR);
		$stmt->bindParam(":productprice", $productPrice, PDO::PARAM_STR); 
		$stmt->bindParam(":productcategory", $data["productcategory"], PDO::PARAM_STR);
		$stmt->bindParam(":productbrand", $data["productbrand"], PDO::PARAM_STR);
		$stmt->bindParam(":productqty", $data["productqty"], PDO::PARAM_INT);
		$stmt->bindParam(":productallowtrans", $data["productallowtrans"], PDO::PARAM_INT);
		$stmt->bindParam(":productlicenseduedate", $data["productlicenseduedate"], PDO::PARAM_STR);
		

		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}
		$stmt->close();
		$stmt = null;

	}
	static public function mdlGetProduct($item, $value) {
		$stmt = (new Connection)->connect()->prepare("SELECT * FROM products WHERE $item = :val");
		$stmt->bindParam(":val", $value, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt -> close();
		$stmt = null;
	}
	static public function mdlShowProducts(){
		$stmt = (new Connection)->connect()->prepare("SELECT * FROM products ORDER BY productname");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	
	static public function mdlDeleteProduct($obj){
		$stmt = (new Connection)->connect()->prepare("DELETE FROM products WHERE productid = :prodid");
		$stmt->bindParam(":prodid", $obj["productid"], PDO::PARAM_STR);
		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}
		$stmt->close();
		$stmt = null;
	}	

	static public function 	mdlEditProduct($table, $data){
		$stmt = (new Connection)->connect()->prepare("UPDATE $table SET productname = :productname, abbriviation = :abbriviation, productprice = :productprice, productcategory = :productcategory, productbrand = :productbrand, productqty = :productqty, productallowtrans = :productallowtrans, productlicenseduedate = :productlicenseduedate WHERE productid = :id");
	
		$productPrice = number_format($data["productprice"], 2);
		
		$stmt->bindParam(":id", $data["productid"], PDO::PARAM_STR); // Assuming there's an "id" field in your $data array
		$stmt->bindParam(":productname", $data["productname"], PDO::PARAM_STR);
		$stmt->bindParam(":abbriviation", $data["abbriviation"], PDO::PARAM_STR);
		$stmt->bindParam(":productprice", $productPrice, PDO::PARAM_STR); 
		$stmt->bindParam(":productcategory", $data["productcategory"], PDO::PARAM_STR);
		$stmt->bindParam(":productbrand", $data["productbrand"], PDO::PARAM_STR);
		$stmt->bindParam(":productqty", $data["productqty"], PDO::PARAM_INT);
		$stmt->bindParam(":productallowtrans", $data["productallowtrans"], PDO::PARAM_INT);
		$stmt->bindParam(":productlicenseduedate", $data["productlicenseduedate"], PDO::PARAM_STR);

		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;

	}		
}