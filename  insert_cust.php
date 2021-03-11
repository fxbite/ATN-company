<?php
require_once 'connect.php';


       $conn = connectDB();
        // get data from FORM
        $idCust = $_POST['id_cust'];
        $custName = $_POST['name'];
        $custPhone = $_POST['phone'];
        $custEmail = $_POST['email'];

        echo $idCust; <br>
        echo $custName; <br>
        echo $custPhone; <br>
        echo $custEmail; <br>
        $sql = "INSERT INTO customer (idCust, nameCust, phone, email) VALUES 
            ('$idCust', '$custName', '$custPhone', '$custEmail')";

        echo $sql; <br>

        if (pg_query($conn,$sql)){
            echo "Records added successfully.";
        } else {
            echo "Records failed." . pg_error($conn);
        }


?>