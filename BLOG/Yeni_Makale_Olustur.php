<?php include('Makaleler_Page.php') ?>
<?php require_once "connectDB.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Yeni_Makale_Olustur.css">
</head>
<body>
	<center>
	<form method="POST" action="Yeni_Makale_Ekle_Database.php">
		<div class="wrapper">
			<input type="text" name="baslik" required="" placeholder="Baslik Yazin">
			<textarea class="content" name="makale" placeholder="Makalenizi Yazmaya baslayin" required=""></textarea>
		</div>
		
		<input type="submit" name="M_EKLE" value="MAKALE EKLE" onclick="">
		
	</form>
</center>
</body>
</html>