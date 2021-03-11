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

$sql = 'INSERT INTO public."customer" ("idCust", "nameCust", "phone", "email") VALUES 
        ('."'$idCust'::integer, '$custName'::character varying, '$custPhone'::character varying, 
        '$custEmail'::character varying)".' returning "id"';

echo $sql;

if (pg_query($conn,$sql)){
    echo "Records added successfully.";
} else {
    echo "Records failed.";
}  
?>




