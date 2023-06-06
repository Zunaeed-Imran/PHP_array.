<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative array input value</title>
</head>
<body>
  <form action="associative_arrays3.php" method="post">
    <label>Enter a country</label>
    <input type="text" name="country">
    <input type="submit">
  </form>
</body>
</html>

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

  $capital= $capitals [$_POST["country"]];

  echo $capital;

?>