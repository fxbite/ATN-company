<?php
session_start();
require_once 'connect.php';

$con = connectdb();

// Get data products.php
$phone_num = $_POST['phone_cust'];
$total_pro = $_SESSION["total"];
$name_item = $_SESSION["item_name"];


// Search vs Get ID customer
$query = "select * from customer where \"phone\"= '$phone_num'";
$info = pg_query($con, $query);
$row = pg_fetch_array($info);

$id_cust = $row['idCust'];


// Search vs Get ID products
$sql_query = "INSERT INTO product where \"name_pro\"= '$name_item'";
echo $sql_query;
// $info1 = pg_query($con, $sql_query);
// $row1 = pg_fetch_array($info1);

// $id_pro = $row1['idPro'];
// echo $id_pro;



// $insert_data = "INSERT INTO invoice (id_cust, id_pro, total) VALUES ('$id_cust',')";

// if (pg_query($con,$insert_data)){
//     echo "Saving successfully.";
// } else {
//     echo "Failed saving.";
// }  

?>