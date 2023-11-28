<?php
// Practice associative array different way
// practice replace in associative array
// practice add new in associative array

echo "<h2>Capital of some country</h2>";

$testing  = array(
  "Palistine" => "Gaza",
  "Bangladesh" => "Dhaka",
  "United_State" => "America",
  "United_Kingdom" => "London"
);

$testing['Australia'] = "Canbera";   // add a associative array
$testing['Palistine'] = "East_Jerusalim"; // replace associative array

foreach ($testing as $value1 => $value2){
  echo $value1 . " = " . $value2 . '<br>';
}

?>