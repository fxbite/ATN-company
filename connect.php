<?php  
function connectdb()
{
$host = "ec2-54-159-175-113.compute-1.amazonaws.com";
$db = "d54jga5rdkh2ad";
$user = "exggdztndbdebf";
$port = "5432";
$pass = "7ae7d3acef3d6c224a91e44039fa8097fc84587aa9192914201bc6e05af40f41";
$ssl = "require";

$con = pg_connect("dbname=$db host=$host port=$port user=$user password=$pass sslmode=$ssl");

if (!$con) {
   echo "Database connection failed.";
} else {
   echo "Database connected.";
}
   // return $con;

}

    
// $sql = "INSERT INTO customer (idCust, nameCust, phone, email) VALUES 
//         ('$idCust', '$custName', '$custPhone', '$custEmail')";

//     echo $sql; <br>

//     if (pg_query($conn,$sql)){
//       echo "Records added successfully.";
//       } else {
//            echo "Records failed." . pg_error($conn);
//         }  

?>
