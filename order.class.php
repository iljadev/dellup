<?php
class Order {
	
		private $connection;
	
	// __construct käivitatakse automaatselt esimesena
	function __construct($mysqli){
		
		$this->connection = $mysqli;
	
	}
	
function AddOrder($product_id,$fname,$lname,$client_id,$email,$phone,$address,$town,$maakond,$riik){
	
		
		$stmt =$this->connection->prepare("INSERT INTO orders (Product_ID,Client_fname,Client_lname,Client_ID,Client_Email,Client_Phone,Client_Address,Client_Town,Client_Maakond,Client_Riik) VALUES (?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("isssssssss",$product_id,$fname,$lname,$client_id,$email,$phone,$address,$town,$maakond,$riik);
		$stmt->execute();
		
		return "";
	
	
	
}
	
	
	
}?>
	