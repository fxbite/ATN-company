<?php
session_start();
require_once 'connect.php';

$con = connectdb();

// Get data products.php
$name_cust = $_POST['name_cust'];
$phone_num = $_POST['phone_cust'];
$total_pro = $_SESSION["total"];
$name_item = $_SESSION["item_name"];

echo $name_cust;
// // Search vs Get ID customer
// $query = "select * from customer where \"phone\"= '$phone_num' or \"namme_cust\"= '$name_cust'";
// $info = pg_query($con, $query);
// $row = pg_fetch_array($info);
// $id_cust = $row['idCust'];


// // Search vs Get ID products
// $sql_query = "select * from product where \"name_pro\"= '$name_item'";
// $info1 = pg_query($con, $sql_query);
// $row1 = pg_fetch_array($info1);
// $id_pro = $row1['idPro'];


// // Save invoice
// $insert_data = "INSERT INTO invoice (id_cust, id_pro, total) VALUES ('$id_cust','$id_pro','$total_pro')";

// if (pg_query($con,$insert_data)) {
//     echo "Saving successfully.";
// } else {
//     echo "Failed saving.";
// }  
?>