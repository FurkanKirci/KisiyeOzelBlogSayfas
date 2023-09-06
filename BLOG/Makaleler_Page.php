<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<title></title>
	<link rel="stylesheet" type="text/css" href="makaleler_Page_css.css">
</head>
<body>
	<nav>
		<input type="checkbox" id="check">
		<label for="check">
			<i class="fas fa-bars" id="open-menu"></i>
			<i class="fas fa-times" id="close-menu"></i>
		</label>
		<a href="cikis.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/ZDF_logo%21_Logo_2021.svg/640px-ZDF_logo%21_Logo_2021.svg.png"></a>
		<ul>
			<li class="dropdown">
				<a href="#" class="dropbtn">Makale</a>
				<div class="dropdown-content">
					<a href="Makale_Ekle.php">Makaleler</a>
					<?php if(isset($_SESSION['username'])){ ?>
						<a href="Yeni_Makale_Olustur.php">Makale Ekle</a>
					<?php } ?> 
					<a href="">Makale Detay</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="#">Ders</a>
				<div class="dropdown-content">
					<a href="Dersler.php">Dersler</a>
					<?php if(isset($_SESSION['username'])){ ?>
						<a href="Ders_Ekle.php">Ders Ekle</a>
					<?php } ?>
				</div>
			</li>
			<li><a href="#">Hobiler</a></li>
			<li><a href="#">Hakkımda</a></li>
			<li><a href="#">Iletisim</a></li>
			<li><a href="#">
				<?php if(isset($_SESSION['username'])){
	    			echo $_SESSION['username'];
	    		}else{
	    			echo "MİSAFİR";
	    		} ?> 
			</a></li>
		</ul>
	</nav>
	<br>
</body>
</html>