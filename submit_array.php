<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="" method="post">
      <label>Enter a country</label>
      <input type="text" name="country">
      <input type="submit">
    </form>
</body>
</html>


<?php
// in that example we can only input the country name we use in the associative array

$capitals = array(
            "USA" => "Washinton DC",
            "Bangladesh" => "Dhaka",
            "India" => "New Delhi",
            "Japan" => "Koyota"
);
  $capitals = $capitals[$_POST["country"]];
  
  echo $capitals;
?>

