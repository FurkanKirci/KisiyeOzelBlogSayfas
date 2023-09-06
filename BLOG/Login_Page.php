<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Login_Page_css.css">
	<script type="text/javascript" src="kodlar.js"></script>
</head>
<body>
	<div class="center">
		<h1>Giris Yap</h1>
		<form method="post" action="giriskontrol.php">
			
			<div class="txt">
				<input type="text" name="usrname" required="">
				<span></span>
				<label>Kullanici Adi</label>
			</div>
			<div class="txt">
				<input type="password" name="pswrd" required="">
				<span></span>
				<label>Sifre</label>
			</div>
			<input type="submit" name="gir" value="GIRIS">
			<div class="signup_link">
				<input type="submit" name="kayit" value="KAYDOL" onclick="">
			</div>
			
		</form>
		<div class="signup_link">
				<form method="post" action="giriskontrol.php">
				<input type="submit" name="misafir" value="MISAFIR GIRISI">
				</form>
			</div>
	</div>
	
</body>
</html>            