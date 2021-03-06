<!DOCTYPE html>
<html>
<head>
	<title>Postest 3</title>
	<style>
		* {
			padding: 0;
			margin: 0;
			top: 0;
			bottom: 0;
			right: 0;
			left: 0;
		}

		.bg {
			border: solid 1px;
			background: url("Uad.jpg");
			background-size: cover;
			height: 800px;

		}
		.for {
			width: 250px;
			height: 370px;
			border: solid 1px #fff;
			margin: 70px 80px;
			box-shadow: 0px 0px 6px 2px #44c1eb;
			background-color: rgba(255, 255, 255, 0.5);

		}
		.foto {
			width: 50px;
			height: 50px;
			border-radius: 50px;
			border: solid 0.5px;
			margin-top: 10px;

		}
		.in {
			margin: 10px;
			height: 24px;
			border: none;
			border-bottom: solid 0.8px;
			background-color: rgba(255, 255, 255, 0);
			color: #fff;

		}
		.btn {
			margin-top: 6px;
			width: 165px;
			height: 25px;
			border-radius: 20px;
			border: none;
			background-color: #44c1eb;
			color: #fff;
			font-weight: bold;

		}
		h6 a {
			text-decoration: none;
			color: rgb(255, 255, 255);
		}
		.dahlan {
			height: 100px;
			width: 200px;
			position: absolute;
			margin: 200px 500px;
		}
		.dahlan h1 {
			font-style: italic;
			color: #fff;
		}
		.atas {
			width: auto;
			height: 25px;
			background-color: #1e00c7;
		}
		.kning {
			width: auto;
			height: 5px;
			background-color: #ffff03;
		}
		.teng {
			margin: 0px 25%;
		}
		.teng ul li{
			display: inline-block;
			padding: 3px 9px;
		}
		.teng ul li a {
			text-decoration: none;
			color: #fff;
			padding: 5px 0px;
		}
		.teng ul li a:hover {
			text-decoration: none;
			color: #1e00c7;
			padding: 5px 0;
			background-color: #ffff03;
		}
		.active{
			text-decoration: none;
			color: #1e00c7;
			padding: 5px 0;
			background-color: #ffff03;
		}
		.icon li {
			display: inline-block;
			margin-left: 8px;
		}

		.icon .gg {
			display: inline-block;
			margin-top: 5px;
		}

	</style>
</head>
<body>
	<div class="bg">
		<div class="kning"></div>
		<div class="atas">
			<div class="teng">
				<ul>
					<li><a href="">Home</a></li>
					<li class="active"><a  href="#">Login</a></li>
					<li><a href="berita.html">Berita</a></li>
					<li><a href="about.html">Profil</a></li>
					<li><a href="daftar.html">Daftar</a></li>
				</ul>
			</div>
		</div>
		<div class="for">
			<center>
				<br>
				<img class="foto" src="tes.jpg">
				<h3 class="tulis">Sign in</h3><br>
				<h6 style="color: white;">Login with Facebook <br>or Google</h6><br>
				<ul class="icon">
					<li><a href="https://www.facebook.com/"><img src="fb.png" width="34px" height="34"></a></li>
					<li class="gg"><a href="https://www.google.com/"><img src="gg.png" width="28px" height="28"></a></li>
				</ul>
				<form action="proses.php" method="GET">
					<input class="in" type="name" name="nama" placeholder="Username or Email"><br>
					<input class="in" type="password" name="pass" placeholder="Password"><br>
					<input class="btn" type="submit" name="submit" value="Sign in">
				</form><br>
				<h6 style="color: white; font-family: sans-serif;"><a href="">Forgot your password?</a> <br><a href="">Not a member</a> <a href="#">Sign up new</a></h6>

			</center>
			
		</div>
			<div class="dahlan">
				<h3 style="font-family: sans-serif; color: white;">Hello!</h3>
				<h1>Dahlan Muda</h1>
			</div>
	</div>
</body>
</html>
