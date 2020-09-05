<?php 
session_start();
require "connection.php";
$korisnickoIme = $_GET["korisnickoIme"];
$lozinka = $_GET["password"];

$sql = 'SELECT korisnikID, uloga 
FROM korisnik
WHERE korisnickoIme = "'.$korisnickoIme.'" AND lozinka = "'.$lozinka.'"';

 $query = mysqli_query($db,$sql); 
 $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
    foreach ($result as $res) {
        $_SESSION["korisnik"] = $res["korisnikID"];
        $_SESSION["uloga"] = $res["uloga"];
    
        if($res["uloga"] == 1)
            header("Location: http://ticketsystem/administrator.html");
        if($res["uloga"] == 2)
        header("Location: http://ticketsystem/korisnik.html");
        if($res["uloga"] > 2){
            header("Location: http://ticketsystem/korisnikUloga.html");

        }
    }
    
    


    
   
    


?>

