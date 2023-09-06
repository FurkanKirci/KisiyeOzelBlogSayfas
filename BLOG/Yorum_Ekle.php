<?php  
require_once "connectDB.php";
session_start();
	if(isset($_SESSION['username'])){
		$sqlQuery = $dbConnection->prepare("INSERT INTO yorumlar SET 
			makale_id=:mid,
			yorumcu=:myorumcu,
			yorum=:myorum
			");
		$sqlQuery->bindParam(":mid",$_GET['makale_id']);
		$sqlQuery->bindParam(":myorumcu",$_SESSION['username']);
		$sqlQuery->bindParam(":myorum",$_POST['yorum']);
		$sqlQuery->execute();
	}else{
		
		$sqlQuery = $dbConnection->prepare("INSERT INTO yorumlar SET 
			makale_id=:mid,
			yorumcu=:myorumcu,
			yorum=:myorum
			");
		$sqlResult = $sqlQuery->execute([
			'mid'=> $_GET['makale_id'],
			'myorumcu'=> 'MISAFIR',
			'myorum'=> $_POST['yorum'],
		]);
	}
	header("Location: Makale_Ekle.php");
?>