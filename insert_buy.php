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

// $sql = "INSERT INTO customer (idCust, nameCust, phone, email) VALUES 
//         ('$idCust', '$custName', '$custPhone', '$custEmail')";

$query = "INSERT INTO customer VALUES ('$_POST[id_cust]','$_POST[name]',
'$_POST[phone]','$_POST[email]')";

echo $query;

if (pg_query($conn,$query)){
    echo "Records added successfully.";
} else {
    echo "Records failed.";
}  
?>




