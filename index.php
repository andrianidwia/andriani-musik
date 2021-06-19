<?php
session_start();
include "inc/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Musik</title>
<style type="text/css">
body{
	font-family: arial;
	font-size: 14px;
}

#canvas{
	width: 960px;
	margin: 0 auto;
	border: 1px solid silver;
}

#header{
	font-size: 20px;
	padding: 20px;
}

#menu{
	background-color: #0066ff;
}

#menu ul{
	list-style none;
	margin: 0;
	padding: 0;
}

#menu ul li.utama{
	display: inline-table;
}

#menu ul li:hover{
	background-color: #0033cc;
}

#menu ul li a{
	display: block;
	text-decoration: none;
	line-height: 40px;
	padding: 0 10px;
	color: #fff;
}

.utama ul{
	display: none;
	position: absolute;
	z-index: 2;
}

.utama:hover ul{
	display: block;
}

.utama ul li{
	display: block;
	background-color: #6cf;
	width: 140px;
}

#isi{
	min-height: 400px;
	padding: 20px;
}

#footer{
	text-align: center;
	padding: 20px;
	background-color: #ccc; 
}

</style>
</head>
<body>

<div id="canvas">
	<div id="header">
		Musik
	</div>

	<div id="menu">
		<ul>
			<li class="utama"><a href="/pertama">Home</a></li>
			<li class="utama"><a href="">Artist</a>
				<ul>
					<li><a href="?page=artist">Artist Name</a></li>
				</ul>
			</li>
			<li class="utama"><a href="">Album</a>
				<ul>
					<li><a href="?page=album">Album Name</a></li>
				</ul>
			</li>
			<li class="utama"><a href="">Track</a>
				<ul>
					<li><a href="?page=track">Track Name</a></li>
				</ul>
			</li>
			<li class="utama" style="float:right;"><a href="inc/logout.php">Logout</a></li>
		</ul>
	</div>

	<div id="isi">
	<?php
	$page = @$_GET['page'];
	if($page == "artist"){
		echo "Agnes Monica";
	}else if($page == "album"){
		echo "Pemilik Hatiku";
	}if($page == "track"){
		echo "Terdampar";
	} else if($page == "") {
		echo "SELAMAT DATANG DI PLAYIST MUSIK";
	}
	?>
	</div>

	<div id="footer">
		@copyright 2021 ||| by Andriani Dwi Astuti |||
	</div>
</div>

</body>
</html>