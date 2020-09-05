<?php
session_start();
require "connection.php";
$zahtjevID = $_POST["zahtjevID"];//POST??
$naslov = $_POST["naslov"];
$sadrzaj = $_POST["sadrzaj"];
$korisnikPredao = $_POST["korisnikPredao"];
$korisnikObavio = $_SESSION["korisnik"];
$dateTimePredao = $_POST["datetimePredao"];
$uloga = $_POST["uloga"];

$timezone = date_default_timezone_get();
date_default_timezone_set($timezone);
$datetimeIZvrsio = date('Y-m-d H:i:s', time());

    $sql="INSERT INTO `arhiva` (`ArhivaID`, `Naslov`, `Sadrzaj`, `korisnikPredao`, `DatumVrijemePredao`, `DatumVrijemeIzvrsio`, `Uloga`, `korisnikObavio`) VALUES 
    ('$zahtjevID', '$naslov', '$sadrzaj', '$korisnikPredao', '$dateTimePredao', '$datetimeIZvrsio', '$uloga', '$korisnikObavio');";


 if (mysqli_query($db, $sql)) {
  
    echo "Novi arhiva uspjesno kreiran";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
  }
  


?>  