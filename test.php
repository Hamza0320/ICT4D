<?php
$servername = "localhost";
$username = ""; #fill in own database information
$password = "; #fill in own database information
$dbname = ""; #fill in own database information


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
