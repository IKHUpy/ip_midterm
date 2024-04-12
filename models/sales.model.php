<?php
date_default_timezone_set('Asia/Manila');
require_once "connection.php";
class ModelSale{
	static public function mdlAddSale($data){
		$db = new Connection();
		$pdo = $db->connect();
        try{
        	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->beginTransaction();

            $sale_id = $pdo->prepare("SELECT invno FROM sales ORDER BY id DESC LIMIT 1");

            $sale_id->execute();
		    $saleid = $sale_id -> fetchAll(PDO::FETCH_ASSOC);

		    $sale_number = $saleid[0]['invno'];
		    $sequence_code = strval(intval(substr($sale_number,-5)) + 1);
		    $salecode = "SI" . str_repeat("0",5 - strlen($sequence_code)) . $sequence_code;

			$stmt = $pdo->prepare("INSERT INTO sales(invno, stime, amount, productlist) VALUES (:invno, :stime, :amount, :productlist)");	

			$stmt->bindParam(":invno", $salecode, PDO::PARAM_STR);
			$stmt->bindParam(":stime", $data["stime"], PDO::PARAM_STR);	
			$stmt->bindParam(":amount", $data["amount"], PDO::PARAM_STR);	
            $stmt->bindParam(":productlist", $data["productlist"], PDO::PARAM_STR);
			$stmt->execute();

			$itemsList = json_decode($data["productlist"]);
			foreach($itemsList as $product){
				$items = $pdo->prepare("INSERT INTO salesitems(invno, qty, price, tamount, prodid) VALUES (:invno, :qty, :price, :tamount, :prodid)");

				$items->bindParam(":invno", $salecode, PDO::PARAM_STR);
				$items->bindParam(":qty", $product->qty, PDO::PARAM_STR);
				$items->bindParam(":price", $product->price, PDO::PARAM_STR);
				$items->bindParam(":tamount", $product->tamount, PDO::PARAM_STR);
				$items->bindParam(":prodid", $product->prodid, PDO::PARAM_STR);
				$items->execute();
			}			

		    $pdo->commit();
		    return "ok";
		}catch (Exception $e){
			$pdo->rollBack();
			return "error";
		}	
		$pdo = null;	
		$stmt = null;
	}
}