<html>
	<head>
		<meta charset="UTF-8">
		<title>IMDB</title>
	<style>
	.topnav {
	overflow: hidden;
	background-color: #e9e9e9;
	position: fixed;
	width: 100%;
	}
	.topnav a {
	float: left;
	display: block;
	color: black;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	font-size: 17px;
	}
	.topnav a:hover {
	background-color: #ddd;
	color: black;
	}
	.topnav a.active {
	background-color: #2196F3;
	color: white;
	}
	.topnav input[type=text] {
	float: center;
	padding: 6px;
	border: none;
	margin-top: 8px;
	margin-right: 16px;
	font-size: 17px;
	}
	@media screen and (max-width: 600px) {
	.topnav a, .topnav input[type=text] {
		float: none;
		display: block;
		text-align: left;
		width: 80%;
		margin: 0;
		padding: 14px;
	}
	.topnav input[type=text] {
		border: 1px solid #ccc;
	}
	}
	body{
		background-image: url("pozadina1.jpg");
	}
	select{
		width: 10%;
		margin: 0;
		padding: 7px;
	}
	#odjava{
		float:right;
		width: 10%;
	}
	</style>
	</head>
	<body>
	<div class="topnav">
		<input type="text" placeholder="Pretraži...">
	<select>
       <option> Romantični </option>
       <option> Akcioni </option>       
       <option> Komedija </option>
	   <option> Drama </option>       
       <option> Triler</option>
	   <option> Misterija </option>       
       <option> Horor</option>
    </select>
	<p id="odjava"><a href="index1.php">Odjavi se</a></p>
	</div><br><br><br><br>
	<?php 
	
		include('bazaFilmovi.php');
	?>
	</body>
</html>