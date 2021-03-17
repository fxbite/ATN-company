<?php 
require_once 'connect.php';

$con = connectdb();

// Get data from save invoice form
$phone_num = $_POST['phone_cust'];

// Search ID customer
$query = "select * from customer where \"phone\"= '$phone_num'";
$info = pg_query($con, $query);
$row = pg_fetch_array($info);

echo $row;


?>