<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrapt1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="Bootstrapt1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/fontawesome.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/fontawesome.min.css">
    <title>Giriş</title>

</head>

<body>

<script src="https://code.jquery.com/jquery-2.2.4.js"
	integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script src="bootstrapt1/js/bootstrap.js"></script>
<nav class="navbar navbar-default syfa">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
				data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">Ebubekir Mert</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="index.html">Anasayfa <span class="sr-only">(current)</span></a></li>
				<li><a href="hakkımda.html">Hakkımda<span class="sr-only">(current)</span></a></li>
				<li><a href="Özgeçmiş.html">Özgeçmiş <span class="sr-only">(current)</span></a></li>
				<li><a href="Şehrim.html">Şehrim <span class="sr-only">(current)</span></a></li>
				<li><a href="Takımım.html">Takımım <span class="sr-only">(current)</span></a></li>
				<li><a href="İlgiAlanım.html">İlgi Alanım <span class="sr-only">(current)</span></a></li>
				<li><a href="İletişim.html">İletişim <span class="sr-only">(current)</span></a></li>

			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="giris.html">Giriş <span class="sr-only">(current)</span></a></li>
			</ul>
		</div>
	</div>
</nav>
	<header>

		<div class="bg-info text-light jumbotron balikcilar-jumbotron site_giris" >

			<div class="container">

			<?php 
                error_reporting(0);
                include("kullanicilar.php");

				if (($_POST["email"] == $Email) and ($_POST["password"] == $Şifre))
				{
			       $_SESSION["Login"] = "true";
			       $_SESSION["Email"] = $Email;
			       $_SESSION["Şifre"] = $Şifre;
			
			       echo("<h1><mark>HOŞGELDİNİZ $Şifre </mark></h1>");
			
				}
			
				else 
				{
			            echo "<h2><mark>Kullancı Adı veya Şifre Yanlış.</mark></h2><br>";
			            echo "<h2><mark>TEKRAR DENEYİN!!!</mark></h2>";
			            header("Refresh: 2; url=giris.html");
			    }

            ?>

			</div>

		</div>

	</header>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


	

</body>

</html>