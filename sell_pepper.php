<?php
require ('test.php');

$sql = "SELECT * FROM MySeeds WHERE kind='Pepper'";
$result = $conn->query($sql);
$quantity = array();
$phone = array();
while($row = mysqli_fetch_assoc($result)){
		array_push($quantity, $row["kg"]);
		array_push($phone, $row["tel"]);
	}
$quantity1 = $quantity[0];
$quantity2 = $quantity[1];
$quantity3 = $quantity[2];

$phone1 = $phone[0];
$phone2 = $phone[1];
$phone3 = $phone[2];

$conn->close();
?>