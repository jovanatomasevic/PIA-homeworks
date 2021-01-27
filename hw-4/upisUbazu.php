<?php 
include('konekcijaNaBazu.php');
if (isset($_POST['submit'])) {
    $ime = $conn->real_escape_string($_POST["ime"]);
    $prezime = $conn->real_escape_string($_POST["prezime"]);
	$korisnickoIme = $conn->real_escape_string($_POST["korisnickoIme"]);
    $email =$conn->real_escape_string($_POST["mejl"]);
    $lozinka = $conn->real_escape_string($_POST["lozinka"]);
       $sql = "INSERT INTO korisnici (ime, prezime, korisnickoIme, email, lozinka) VALUES ('$ime', '$prezime', '$korisnickoIme', '$email', '$lozinka')";

        if ($conn->query($sql) === TRUE) {
            echo "Uspešno ste se registrovali, dobro došli!";
        } else {
            echo "Greška: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        }
 ?>