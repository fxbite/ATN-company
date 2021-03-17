<?php 
require_once "connect.php";
$con = connectdb();

// Get info from Save Invoice form 
$name_cust = $_POST['name_cust'];
$phone_cust = $_POST['phone_cust'];

$sql = "select * from customer";
$check = pg_query($con, $sql);
$row = pg_fetch_array($check);
  


?>