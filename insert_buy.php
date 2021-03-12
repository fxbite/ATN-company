<?php
require_once "connect.php";

$conn = connectdb();

$sql = "INSERT INTO customer VALUES ('$_POST[id_cust]','$_POST[name]',
'$_POST[phone]','$_POST[email]')";

if (pg_query($conn,$sql)){
    echo "Records added successfully.";
} else {
    echo "Records failed.";
}  
?>




