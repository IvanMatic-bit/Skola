<?php
session_start();
require "connection.php";
$naslov =$_POST["naslov"];
$sadrzaj =$_POST["sadrzaj"];
$korisnik = 11;
$timezone = date_default_timezone_get();
date_default_timezone_set($timezone);
$datetime = date('Y-m-d H:i:s', time());
$uloga= $_POST["uloga"];

$sql = "INSERT INTO zahtjev (`ZahtjevID`, `Naslov`, `Sadrzaj`, `korisnik`, `DatumVrijeme`, `Uloga`) VALUES
 (NULL, '$naslov', '$sadrzaj', '$korisnik', '$datetime','$uloga')";

if (mysqli_query($db, $sql)) {
    //kada kreiram pregled korisnika dodati da nakon kreiranja vodi na listu korisnika
    //header("Location: http://ticketsystem/korisnik.html");
    echo "Novi zahtjev uspjesno kreiran";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
  }


?>