<?php
require_once "connect.php";


if (isset($_POST['submit'])) {
    $conn = connectdb();

     // get data from FORM
    $idBuy = $_POST['id_cust'];
    $nameBuy = $_POST['name'];
    $phoneBuy = $_POST['phone'];
    $emailBuy = $_POST['email'];

    echo $idBuy;
    echo $nameBuy;
    echo $phoneBuy;
    echo $emailBuy;
}
    $sql = "INSERT INTO customer VALUES ('$idBuy',' $nameBuy',
    ' $phoneBuy','$emailBuy')";

    // $sql = "INSERT INTO customer VALUES ('$_POST[id_cust]','$_POST[name]',
    // '$_POST[phone]','$_POST[email]')";

if (pg_query($conn,$sql)){
    echo "Records added successfully.";
} else {
    echo "Records failed.";
}  
?>




