<?php session_start(); ?>
<?php require_once "connectDB.php" ?>
<?php include('Makaleler_Page.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Dersler.css">
</head>
<body>
	<?php if($dbConnection != null){
		$sql = $dbConnection->prepare("SELECT kullanicilar.kullanici_adi,dersler.id,dersler.ders_adi from dersler,kullanicilar where dersler.ders_veren = kullanicilar.id");
		$sql->execute();
	} ?>
	<table>
  <tr>
    <th>Sıra</th>
    <th>Ders Adı</th>
    <th>Ders Veren</th>

   	<?php 
			$sayac = 1;
			while($ders = $sql->fetch(PDO::FETCH_ASSOC)){?>
				<tr>
					<td><?php echo $ders['id']; ?></td>
					<td><?php echo $ders['ders_adi']; ?></td>
					<td><?php echo $ders['kullanici_adi']; ?></td>
					<td><a href="">SİL</a></td>
				</tr>
			<?php } ?>
	
  
</table>
</body>
</html>