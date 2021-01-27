<html>
	<head>
		<meta charset="UTF-8">
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
		text-align:center;
		width: 40%;
		padding: 12px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		font-size: 25px;
		position: center;
	}
	</style>
	<body>
	<div id="prijava">
	<h1>Prijava</h1>
		<form  method="POST" name="prijava">
			<input type="text" name="korisnickoIme" placeholder="E-mail adresa ili korisnièko ime"></br>
			<input type="password" name="lozinka" placeholder="Lozinka"></br>
			<input type="submit" name="submit" value="Prijavi se"></br>
		</form>
	</div>
	
	</body>
</html>