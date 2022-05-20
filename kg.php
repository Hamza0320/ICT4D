<?php
require ('test.php');
// get quantity
$kg = $_POST['kg'];

// write to right row in db
$result=pg_query($db_conn,"INSERT INTO MyGuests (kg) VALUES
('$kg')") ;

if(!$result){
  echo pg_last_error($db_conn);
} else {
  echo "Inserted successfully";
}

?>