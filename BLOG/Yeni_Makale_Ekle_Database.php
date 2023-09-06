<?php require_once "connectDB.php"?>
<?php session_start(); ?>
<?php  
try{
	if(isset( $_POST['M_EKLE'] ) ){
		/*$sqlQuery = "INSERT INTO makaleler (yazar,baslik,icerik,yayin_tarihi) VALUES (
			'".$_SESSION['id']."',
			'".$_POST['baslik']."',
			'".$_POST['makale']."',
			".date("Y-m-d H:i:s").")";
			$sqlResult = $dbConnection->exec($sqlQuery);*/
		
		$sqlQuery = $dbConnection->prepare("INSERT INTO makaleler SET 
			yazar=:yazar_no,
			baslik=:g_baslik,
			icerik=:g_icerik
			");

		$sqlQuery->bindParam(":yazar_no",$_SESSION["id"]);
		$sqlQuery->bindParam(":g_baslik",$_POST['baslik']);
		$sqlQuery->bindParam(":g_icerik",$_POST['makale']);
		$sqlQuery->execute();
		/*
		$sqlResult = $sqlQuery->execute([
			'yazar_no'=> $_SESSION['id'],
			'g_baslik'=> $_POST['baslik'],
			'g_icerik'=> $_POST['makale'],
			'g_yayin_tarihi'=> date("Y-m-d H:i:s")
		]);*/
	}else{
		echo "Kaydi alamadim";
	}
}
catch (Exception $e)
{
	echo "TRY A GİRMEDİM";
	exit;
}
header("Location: Makale_Ekle.php");
?>