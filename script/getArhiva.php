<?php   
require "connection.php";
$kljucnaRijec = $_GET["traziArhiva"];
$sql = "SELECT *
FROM zahtjev
WHERE Sadrzaj  LIKE '%$kljucnaRijec%'
OR Naslov LIKE '%$kljucnaRijec%';
 $query = mysqli_query($db,$sql); 
 $result = mysqli_fetch_all($query,MYSQLI_ASSOC)";

if (mysqli_query($db, $sql)) {
    foreach ($result as $row) {
        echo  '<div class="card w-75 mx-auto my-2">
        <div class="card-header"> 
          <h4 class="card-title">'.$row['Naslov'].'</h4>
          </div>
        <div class="card-body">
         
          <p class="card-text">'.$row['Sadrzaj'].'</p>
        </div>
        <div class="card-footer">
        
        <p>'.$row['DatumVrijeme'].'</p>
        </div>
      </div>';
    }
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
  }




?>