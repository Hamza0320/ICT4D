<?php
require ('test.php');
// get quantity
$kind = $_POST["kind"];
$kg = $_POST["Digits"];
$tel = $_POST["tel"];


$sql="INSERT INTO MySeeds (kind, kg, tel) VALUES
('$kind', '$kg', '$tel')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
