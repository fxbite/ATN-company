<?php
require_once "connect.php";

    $conn = connectdb();

     // get data from FORM
    $nameBuy = $_POST['name'];
    $phoneBuy = $_POST['phone'];
    $emailBuy = $_POST['email'];

    // insert to databse
    $sql = "INSERT INTO customer (nameCust, phone, email) VALUES ('$nameBuy','$phoneBuy','$emailBuy')";

    // $sql = "INSERT INTO customer VALUES ('$_POST[id_cust]','$_POST[name]',
    // '$_POST[phone]','$_POST[email]')";

if (pg_query($conn,$sql)){
    echo "Records added successfully.";
} else {
    echo "Records failed.";
}  
?>




