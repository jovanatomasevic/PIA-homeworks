<html>
	<head>
		<meta charset="UTF-8">
		<title>Registracija</title>
	</head>
	<style> 
		h1{
			text-align: center;
			font-style: italic;
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
			font-size: 25px;
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
		<form action="upisUbazu.php" method="POST" name="registracija">
			<input type="text" name="ime" placeholder="Ime"></br>
			<input type="text" name="prezime" placeholder="Prezime"></br>
			<input type="text" name="korisnickoIme" placeholder="Korisničko ime"></br>
			<input type="email" name="mejl" placeholder="E-mail"></br>
			<input type="password" name="lozinka" placeholder="Lozinka"></br>
			<input type="submit" name="submit" value="Registrujte se"></br>
		</form>
		<a href="prijava.php">Prijavite se u postojeći nalog</a>
	</div>
	</body>
	<?php
	if (isset ($_GET["potvrda"]))
	{	
		//prelazak na stranu sa filmovima
	}
	?>
</html>