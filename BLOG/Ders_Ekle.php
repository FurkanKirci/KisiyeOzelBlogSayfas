<?php session_start() ?>
<?php require_once "connectDB.php" ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="ders_ekle.css">
	<title></title>
</head>
<body>
	<div class="container">
		<header>DERS FORMU</header>
		<form method="post" action="Ders_ekle_database.php">
			<div class="input-field">
				<input type="text" name="ders_adi" required="">
				<label>Ders adi</label>
			</div>

					<input type="submit" name="ekle" value="Ekle">

		</form>
			<form method="post" action="Ders_ekle_database.php">
				<input type="submit" name="back" value="Ana Sayfaya Dön">
			</form>
			
	</div>
</body>
</html>