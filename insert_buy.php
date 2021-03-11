<?php
require_once "connect.php";

$conn = connectdb();

$idCust = $_POST["id_cust"];
$custName = $_POST["name"];
$custPhone = $_POST["phone"];
$custEmail = $_POST["email"];

echo $idCust; 
echo $custName; 
echo $custPhone; 
echo $custEmail;
?>




