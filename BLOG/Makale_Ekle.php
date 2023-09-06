<?php include('Makaleler_Page.php') ?>
<?php require_once "connectDB.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Makaleler</title>
	<link rel="stylesheet" type="text/css" href="Makale_Ekle.css">
</head>
<body>
	<?php if($dbConnection != null){
		$sql = $dbConnection->prepare("SELECT kullanicilar.kullanici_adi,makaleler.baslik,makaleler.yayin_tarih,makaleler.id from makaleler,kullanicilar where kullanicilar.id = makaleler.yazar");
		$sql->execute();
		?>

	<table>
		<tr>
			<th></th>
			<th>Yayıncı</th>
			<th>baslik</th>
			<th>Yayin Tarihi</th>
		</tr>
		<?php 
			$sayac = 1;
			while($makale = $sql->fetch(PDO::FETCH_ASSOC)){?>
				<tr>
					<td><?php echo $sayac; ?></td>
					<td><?php echo $makale['kullanici_adi']; ?></td>
					<td><?php echo $makale['baslik']; ?></td>
					<td><?php echo $makale['yayin_tarih']; ?></td>
					<td><a href="Makale_Detay.php?makale_id=<?php echo $makale[id] ?>">Okumaya Basla</a></td>
				</tr>
			<?php
			$sayac = $sayac + 1;
			}
		}
		 ?>
	</table>
</body>
</html>