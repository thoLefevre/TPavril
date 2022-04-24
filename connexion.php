<?php
	try{
		$pdo=new PDO("mysql:host=ZD;dbname=tutophp","root","root");
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>