<?php
// Practice associative array in Reverse 

$arrrr = array(
  "Pulser" => "N250",
  "Yamaha" => "MT-09",
  "Suzuki" => "Gixxer-SF"
);

$ex= array_reverse($arrrr);

foreach($ex as $val => $val2){
  echo $val. " = " . $val2 . '<br>';
}

?>