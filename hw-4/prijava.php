<html>
	<head>
		<title>Prijava</title>
	</head>
	<style>
	#prijava{
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
		position: center;
	}
	</style>
	<body>
	<div id="prijava">
	<h1>Prijava</h1>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
			Korisničko ime ili e-mail adresa:
			<input type="text" name="ime" size="30"><br>
			Lozinka:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="password" name="lozinka" size="30"><br><br>
			<input type="submit" name="prijava" value="Prijavi se"><br><br>
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