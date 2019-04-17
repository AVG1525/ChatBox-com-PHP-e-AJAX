<?php 
	try{
		$conn =new PDO('mysql:host=localhost;dbname=py;charset=utf8', 'root', '');
	}catch(PDOException $e){
		echo "Error: ".$e->getMessage()."<br>";
		echo "Error Code: ".$e->getCode()."<br>";
		die();
	}
 ?>
