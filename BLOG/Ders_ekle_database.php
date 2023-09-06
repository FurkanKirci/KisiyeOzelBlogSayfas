<?php 
	session_start();
	require_once "connectDB.php";
	if(isset($_POST['ekle'])){
		$sqlQuery = $dbConnection->prepare("INSERT INTO dersler SET 
		ders_veren=:dveren,
		ders_adi=:dadi;		
	");
	$sqlResult = $sqlQuery->execute([
		'dveren'=> $_SESSION['id'],
		'dadi'=> $_POST['ders_adi']
	]);
		Header("Location: Dersler.php");
	}
	elseif(isset($_POST['back'])){
		Header("Location: Dersler.php");
	}
 ?>