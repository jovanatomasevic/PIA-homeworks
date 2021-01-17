<html>
	<head>
		<title>Registracija</title>
	</head>
	<style> 
		h1{
			text-align: center;
		}
		#registracija{
			margin: auto;
			font-size: 25px;
			font-style: italic;
			font-weight: bold;
			padding: 50px 0px;
			text-align: center;
	
		}
		body{
			background-image: url("pozadina.jpg");
		}
		input{
			font-size: 20px;
			margin: auto;
			text-align: center;
		}
		a:link, a:visited {
			background-color: #DEB887;
			color: white;
			padding: 14px 25px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
		}
	</style>
	<body>
	<h1>Registracija</h1>
	<div id="registracija">
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
			Ime: &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="ime" size="30"> <br>
			Prezime:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="prezime" size="30"> <br>
			E-mail adresa:&nbsp;
			<input type="text" name="mejl" size="30"> <br>
			Korisničko ime:
			<input type="text" name="korisnickoIme" size="30"> <br>
			Lozinka:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="password" name="lozinka" size="30"><br><br>
			<input type="submit" name="potvrda" value="Potvrdi"><br><br>
			<a href="prijava.php">Prijavite se u postojeći nalog</a>
		</form>
	</div>
	</body>
	<?php
	if (isset ($_GET["potvrda"]))
	{	
		//prelazak na stranu sa filmovima
	}
	?>
</html>
