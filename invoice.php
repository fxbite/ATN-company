<?php 
require_once "connect.php";
$con = connectdb();

// Get info from Save Invoice form 
$name_cust = $_POST['name_cust'];
$phone_cust = $_POST['phone_cust'];

// Get info from customer table
$sql = "select * from customer";
$check = pg_query($con, $sql);
$row = pg_fetch_array($check);
  
if ($name_cust == $row['name_cust'] || $phone_cust == $row['phone']) {
    $querry = "select * from customer where \"name_cust\" = '$name_cust' or \"phone\" = '$phone_cust'";
    $get_data = pg_query($con, $querry);
    $product = pg_fetch_array($get_data);
    $query = "INSERT INTO invoice (id_cust, name_product, total) VALUES ('$product 
}

?>