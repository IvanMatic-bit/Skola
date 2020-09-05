<?php   
  $timezone = date_default_timezone_get();
  date_default_timezone_set($timezone);
$date = date('m/d/Y h:i:s a', time());
  echo "The current server timezone is: " . $date;



?>