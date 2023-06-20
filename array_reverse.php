<?php
$capitals = array(
            "USA" => "Washinton DC",
            "Bangladesh" => "Dhaka",
            "India" => "New Delhi",
            "Japan" => "Koyota"
);
  $capitals =  array_reverse($capitals);
  foreach($capitals as $key => $value){
    echo "{$key} = {$value} </br>";
  }
?>

