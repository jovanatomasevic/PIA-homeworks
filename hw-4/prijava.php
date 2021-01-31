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
	a:link, a:visited {
		color: #8B0000;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		
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
		<form action="filmovi.php"  method="POST" name="prijava">
			<input type="text" name="korisnickoIme" placeholder="E-mail adresa ili korisnicko ime"></br>
			<input type="password" name="lozinka" placeholder="Lozinka"></br>
			<input type="submit" name="submit" value="Prijavi se"></br>
			<a href="index1.php">Nemate nalog?</br>Povratak na prethodnu stranu</a>
		</form>
	</div>
	<?php 
	
	include('konekcijaNaBazu.php');
	if (isset($_POST['submit'])) {
		$korisnickoIme = $conn->real_escape_string($_POST["korisnickoIme"]);
		$email =$conn->real_escape_string($_POST["mejl"]);
		$lozinka = $conn->real_escape_string($_POST["lozinka"]);
	
		if(!$_POST['korisnickoIme'] || !$_POST['lozinka'] || !$_POST['mejl']) {
			die("Niste popunili sva polja!");
		}

        $conn->close();
        }
		mysqli_close($conn);
 ?>
	
	?>
	</body>
</html>