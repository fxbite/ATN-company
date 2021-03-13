<?php
require_once "connect.php";

$conn = connectdb();

// get data from Form
$idPro = $_POST['id_pro'];
$namePro = $_POST['name_pro'];
$imagePro = $_FILES['image']['name'];
$numPro = $_POST['num'];
$pricePro = $_POST['price'];
$descPro = $_POST['desc'];

//Get Image
if(isset($_FILES))
{
    $target_dir = 'assets/img/data';
    $target_file = $target_dir.basename($_FILES['name_pro']['name']);
    
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["image"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
}

echo $idPro;
echo $namePro;
echo $imagePro;
echo $numPro;
echo $pricePro;
echo $descPro; 



$sql = "INSERT INTO product () VALUES ('$idPro','$namePro','$imagePro'
'$numPro','$pricePro','$descPro')";

echo $sql;

if (pg_query($conn,$sql)){
    echo "Records added successfully.";
} else {
    echo "Records failed.";
}  
?>
