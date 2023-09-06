<?php include('Makaleler_Page.php') ?>
<?php require_once "connectDB.php" ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Makale_Detay.css">
	<title></title>
</head>
<body>
	
	<?php 
		$sqlQuery = $dbConnection->prepare("SELECT * FROM makaleler where id=:gid");
	 	$sqlQuery->execute(['gid'=> $_GET['makale_id']]);
	 	$mkl = $sqlQuery->fetch(PDO::FETCH_ASSOC);
	 ?>
	 <?php $id = $mkl['id'];?>
	 <h1><?php echo $mkl['baslik']; ?> <?php echo $mkl['id']; ?></h1>
	 <div class="a">
	 	<p><?php echo $mkl['icerik']; ?></p>
	</div>
		
			<?php $sqlQuery2 = $dbConnection->prepare("SELECT * FROM yorumlar where makale_id=:mkl");
				  $sqlQuery2->execute(['mkl'=> $id]);
			?>
			 
			<?php while ($makale = $sqlQuery2->fetch(PDO::FETCH_ASSOC)) {?>
			 		<hr>
			 		<p><?php echo  $makale['yorumcu']; ?></p>
			 		<p><?php echo $makale['yorum']; ?></p>
			 		<hr>
			<?php } ?>
		<form method="POST" action="Yorum_Ekle.php?makale_id=<?php echo $mkl[id] ?>">
			<textarea name="yorum" placeholder="Yorumunuzu yaziniz"></textarea>
			<input type="submit" name="gonder" value="GONDER">
		</form>
</body>
</html>