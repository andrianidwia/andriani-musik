<?php
session_start();
include "inc/koneksi.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
body{
	font-family: arial;
	font-size: 14px;
	background-color: #222;
}

#utama{
	width: 300px;
	margin: 0 auto;
	margin-top: 12%;
	background-color: #fff;
}

#judul{
	padding: 15px;
	text-align: center;
	color: #fff;
	font-size: 20px;
	background-color: #339966;
	border-top-right-radius: 10px;
	border-top-left-radius: 10px;
	border-bottom: 3px solid #336666;
}

#inputan{
	background-color: gray;
	padding: 20px;
	border-top-right-radius: 10px;
	border-top-left-radius: 10px;
}

input{
	padding: 10px;
	border: 0;
}
.lg{
	width: 200px;
}

</style>
</head>
<body>

<div id="utama">
	<div id="judul">
		Halaman Login
	</div>

	<div id="inputan">
	<form action="" method="post">
		<div>
			<input type="text" name="user" placeholder="Username" class="lg" />
		</div>
		<div style="margin-top: 10px">
		<div>
			<input type="password" name="pass" placeholder="Password" class="lg" />
		</div>
		<div style="margin-top: 10px">
		<div>
			<input type="submit" name="login" value="Login" />
		</div>
	</form>

	<?php
	$user = @$_POST['user'];
	$pass = @$_POST['pass'];
	$login = @$_POST['login'];

	if($login){
		if ($user =="" || $pass ==""){
			?> <script type="text/javascript">alert("Login Berhasil"); </script> <?php
		}
	}
	?>
</div>
</body>
</html>