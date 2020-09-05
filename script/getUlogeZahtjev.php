<?php
require "connection.php";

$sql = "SELECT * FROM uloga WHERE Naziv  NOT LIKE 'Administrator' AND Naziv NOT LIKE 'Korisnik'";
 $query = mysqli_query($db,$sql); 
 $result = mysqli_fetch_all($query,MYSQLI_ASSOC);

foreach($result as $row)
{
    
    echo "<option value=".$row["UlogaID"].">".$row["Naziv"]."</option>";
    
}
?>