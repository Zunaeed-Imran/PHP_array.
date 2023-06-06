<?php
// associative arrays
  $capitals = array(
    "USA" => "Washington D.C",
    "Bangladesh" => "Dhaka",
    "India" => "Delhi",
    "Japan" => "Kyoto"
  );

  $capitals["USA"] = "Las Vagas";
  $capitals["Chaina"] = "Beijing";

  foreach($capitals as $key => $value)
  echo "{$key} = {$value} </br>";

?>