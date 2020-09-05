<?php
require "connection.php";
$ime = $_POST["ime"];
$prezime = $_POST["prezime"];
$adresa = $_POST["adresa"];
$email = $_POST["email"];
$telefon =$_POST["telefon"];
$korisnickoIme = $_POST["korisnickoIme"];
$lozinka = $_POST["lozinka"];
$uloga = $_POST["uloga"];

$sql = "INSERT INTO korisnik (`korisnikID`, `Ime`, `Prezime`, `Adresa`, `Email`, `Telefon`, `korisnickoIme`, `lozinka`, `uloga`) VALUES
 (NULL, '$ime', '$prezime', '$adresa', '$email','$telefon', '$korisnickoIme', '$lozinka', '$uloga')";

if (mysqli_query($db, $sql)) {
    //kada kreiram pregled korisnika dodati da nakon kreiranja vodi na listu korisnika
    //header("Location: http://ticketsystem/administrator.html");
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
  }

?>