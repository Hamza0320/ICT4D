<?php
$servername = "localhost";
$username = "id18961038_root";
$password = "J*wV&r1T3*sLUbP2";
$dbname = "id18961038_mydb";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>