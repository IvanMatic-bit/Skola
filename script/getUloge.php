<?php
require "connection.php";
$sql = "SELECT * FROM uloga";
 $query = mysqli_query($db,$sql); 
 $result = mysqli_fetch_all($query,MYSQLI_ASSOC);

foreach($result as $row)
{
    
    echo "<option value=".$row["UlogaID"].">".$row["Naziv"]."</option>";
    
}
?>