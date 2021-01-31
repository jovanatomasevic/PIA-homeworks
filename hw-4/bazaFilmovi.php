<?php 
$conn=mysqli_connect("localhost", "root", "", "imdb");
if($conn) {
	//echo "Konekcija je uspela: <br>";
}
else{
	die("Konekcija nije uspela. ".mysqli_connect_error());
}
$sql="SELECT id, naslov, opis, žanr, scenarista, režiser, producentskaKuća, listaGlumaca, godinaIzdanja, slika, trajanje FROM filmovi";
$results=mysqli_query($conn,$sql);
if(mysqli_num_rows($results)>0) {
	while($row=mysqli_fetch_array($results)) {
		echo "<p align='center'> <font size='6pt'>".$row[1]. "</p>";
		echo "<p align='center'> <font size='4pt'>".$row[2]. "</p>";
		echo  "<p align= 'center'>"."Žanr: " .$row[3]. "<br>";
		echo "Sceniro: ".$row[4]. "<br>";
		echo "Režija: ".$row[5]. "<br>";
		echo "Produkcija: ".$row[6]. "<br>";
		echo "Glumci: ".$row[7]. "<br>";
		echo "Godina izdanja: ".$row[8]. "." ."<br>";
		echo "Trajanje: ".$row[10] ." min"."<br>";
		echo "<img src=\"{$row[9]}\" height=\"200\" width=\"200\">"."</p>"."</p>";
	}
}
$conn->close();
 ?>