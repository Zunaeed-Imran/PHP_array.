<?php
// associative arrays

  $capitals = array(
    "USA" => "Washington D.C",
    "Bangladesh" => "Dhaka",
    "India" => "Delhi",
    "Japan" => "Kyoto"
  );

  $capitals["USA"] = "Las Vagas";   // we overwrite "USA"
  $capitals["Chaina"] = "Beijing";  // we add a value in array

  foreach($capitals as $key => $value)
  echo "{$key} = {$value} </br>";

?>