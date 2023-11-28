<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="practice4.php" method="post">
    <h3>Country Capital Show</h3><br>
    <p>Enter country name</p><br>
    <input type="text" name="capital">
    <button type="submit">Submit</button>
  </form> 
</body>
</html>

<?php

// in that exampe we can only enter the name of the country we us in tha associative array

$capital_practice = array(
  "bangladesh" => "dhaka",
  "america" => "las_vagas",
  "australia" => "canberra"
);

$cap = $capital_practice[$_POST['capital']];

echo $cap;

?>