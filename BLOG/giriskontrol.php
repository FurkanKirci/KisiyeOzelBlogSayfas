<?php 
session_destroy();
session_start();
require_once "connectDB.php";
if (isset($_POST['gir'])) {
		$sqlQuery = $dbConnection->prepare("SELECT id,kullanici_adi FROM kullanicilar WHERE kullanici_adi=:usrnm AND sifre=:pswrd");
		$sqlQuery->execute(['usrnm'=>$_POST['usrname'], 'pswrd'=>$_POST['pswrd']]);

		$user = $sqlQuery->fetch(PDO::FETCH_ASSOC);
		if ($user) {
			$_SESSION['id'] = $user['id'];
			$_SESSION['username'] = $user['kullanici_adi'];
			Header("Location: Makaleler_Page.php");
			exit;
		} else {
			echo "Hatali giris";
		}
		
}
if (isset($_POST['misafir'])) {
		Header("Location: Makaleler_Page.php");
		exit;
}
if(isset($_POST['kayit'])){
	$sqlQuery = $dbConnection->prepare("INSERT INTO kullanicilar SET
		kullanici_adi=:kadi,
		sifre=:ksifre
	");
	$sqlResult = $sqlQuery->execute([
		'kadi'=> $_POST['usrname'],
		'ksifre'=> $_POST['pswrd']
	]);
	Header("Location: Login_Page.php");
}
 

 ?>
