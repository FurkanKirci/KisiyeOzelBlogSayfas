<?php 
	try{
		$dbConnection = new PDO("mysql:host=localhost; dbname=Odev" , "root" , "msfcrssn71");
	}catch(PDOException $pe) {
		die("Could not connect to the database $dbname :" . $pe->getMessage());
	}
 ?>