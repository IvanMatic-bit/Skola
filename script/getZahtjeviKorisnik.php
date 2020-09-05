<?php 
session_start();
require "connection.php";
$sql = "SELECT Z.Naslov, Z.Sadrzaj, Z.DatumVrijeme, K.Ime, K.Prezime, U.Naziv
FROM zahtjev AS Z INNER JOIN korisnik AS K
ON K.korisnikID = Z.korisnik
INNER JOIN uloga AS U ON U.UlogaID = Z.Uloga WHERE Z.korisnik = ".$_SESSION["korisnik"];
 $query = mysqli_query($db,$sql); 
 $result1 = mysqli_fetch_all($query,MYSQLI_ASSOC);

foreach($result1 as $row)
{
    
    echo  '<div class="card w-75 mx-auto my-2">
    <div class="card-header"> 
      <h4 class="card-title">'.$row['Naslov'].'       ['.$row["Naziv"].']</h4>
      </div>
    <div class="card-body">
     
      <p class="card-text">'.$row['Sadrzaj'].'</p>
    </div>
    <div class="card-footer">
    <p>'.$row['Ime'].' '.$row['Prezime'].'</p>
    <p>'.$row['DatumVrijeme'].'</p>
    </div>
  </div>';
    
}

?>