<?php 
require_once 'connect.php';

$con = connectdb();

// Get data from save invoice form
$phone_num = $_POST['phone_cust'];

// Search ID customer
$query = "select * from customer where \"phone\"= '$phone_num'";
$info = pg_query($con, $query);
$row = pg_fetch_array($info);

// Get data from customer table
$id_cust = $row['idCust'];

echo $id_cust;

// $insert_data = "INSERT INTO invoice (id_cust, id_pro, total) VALUES ('')";

// if (pg_query($con,$insert_data)){
//     echo "Saving successfully.";
// } else {
//     echo "Failed saving.";
// }  

?>