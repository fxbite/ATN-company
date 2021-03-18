<?php
session_start();
require_once 'connect.php';

$con = connectdb();

// Get data from save invoice form
$phone_num = $_POST['phone_cust'];
$total_pro = $_SESSION["total"];
$name_item = $_SESSION["item_name"];
echo $total_pro;
echo $name_item;


// Search ID customer
$query = "select * from customer where \"phone\"= '$phone_num'";
$info = pg_query($con, $query);
$row = pg_fetch_array($info);

// Get data from customer table
$id_cust = $row['idCust'];

// Get data from Order_detail Form


// // Search ID products
// $sql_query = "INSERT INTO product where \"name_pro\"= '$name_item'";
// $info1 = pg_query($con, $sql_query);
// $row1 = pg_fetch_array($info1);

// // Get data from product table
// $id_pro = $row1['idPro'];

// echo $id_pro;


// $insert_data = "INSERT INTO invoice (id_cust, id_pro, total) VALUES ('$id_cust',')";

// if (pg_query($con,$insert_data)){
//     echo "Saving successfully.";
// } else {
//     echo "Failed saving.";
// }  

?>