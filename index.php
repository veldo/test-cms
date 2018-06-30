<!DOCTYPE html>
<html>
<head>
	<title>Class Management Software</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>USER LOGIN</h2></center>
	<br/>
	<div class="login">
	<br/>
		<form method="post" action="cek_login.php">
			<div>
				<input type="text" name="email" placeholder="email" id="email"/>
			</div>
			<div>
				<input type="password" name="password" placeholder="password" id="password"/>
			</div>			
			<div>
				<input type="submit" value="LOGIN" class="tombol">
			</div>		
		</form>
	</div>
	<div align="center">
	<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "Login Failed! Wrong Email or Password!";
			}else if($_GET['pesan'] == "logout"){
				echo "Logout Succesfully";
			}else if($_GET['pesan'] == "belum_login"){
				echo "You Must Login to Access";
			}
		}
	?>
	</div>
</body>
</html>