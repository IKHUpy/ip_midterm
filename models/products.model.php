<?php

require_once "connection.php";

class ModelProducts{
	static public function mdlAddProduct($table, $data){
        $cust_id = (new Connection)->connect()->prepare("SELECT CONCAT('P', LPAD((count(id)+1),4,'0')) as gen_id  FROM products FOR UPDATE");

        $cust_id->execute();
		$custid = $cust_id -> fetchAll(PDO::FETCH_ASSOC);
		
		$stmt = (new Connection)->connect()->prepare("INSERT INTO $table(productid, productname, abbriviation, productprice, productcategory, productbrand, productqty) 
		VALUES (:productid, :productname, :abbriviation, :productprice, :productcategory, :productbrand, :productqty)");
			
		$productPrice = number_format($data["productprice"], 2);
		
		$stmt->bindParam(":productid", $custid[0]['gen_id'], PDO::PARAM_STR);
		$stmt->bindParam(":productname", $data["productname"], PDO::PARAM_STR);
		$stmt->bindParam(":abbriviation", $data["abbriviation"], PDO::PARAM_STR);
		$stmt->bindParam(":productprice", $productPrice, PDO::PARAM_STR); 
		$stmt->bindParam(":productcategory", $data["productcategory"], PDO::PARAM_STR);
		$stmt->bindParam(":productbrand", $data["productbrand"], PDO::PARAM_STR);
		$stmt->bindParam(":productqty", $data["productqty"], PDO::PARAM_INT);
		
		$stmt->execute();

		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}
		$stmt->close();
		$stmt = null;

	}

	static public function mdlShowProducts(){
		$stmt = (new Connection)->connect()->prepare("SELECT * FROM products ORDER BY productname");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	

	static public function mdlEditProduct($table, $data){
		$stmt = (new Connection)->connect()->prepare("UPDATE $table SET productid = :productid, isactive = :isactive, cname = :cname, email = :email, phone = :phone, address = :address, website = :website, cperson = :cperson, mobile = :mobile WHERE id = :id");

		$stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);
		$stmt->bindParam(":productid", $data["productid"], PDO::PARAM_STR);
		$stmt->bindParam(":isactive", $data["isactive"], PDO::PARAM_INT);
		$stmt->bindParam(":cname", $data["cname"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
		$stmt->bindParam(":phone", $data["phone"], PDO::PARAM_STR);
		$stmt->bindParam(":address", $data["address"], PDO::PARAM_STR);
		$stmt->bindParam(":website", $data["website"], PDO::PARAM_STR);
		$stmt->bindParam(":cperson", $data["cperson"], PDO::PARAM_STR);
		$stmt->bindParam(":mobile", $data["mobile"], PDO::PARAM_STR);

		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;

	}		
}