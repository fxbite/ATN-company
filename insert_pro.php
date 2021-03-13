<?php
require_once "connect.php";

$conn = connectdb();

//Get Image
if(isset($_FILES))
{
    $target_dir = "assets/img/data";
    $target_file = $target_dir.basename($_FILES["image"]["name"]);
    
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

$sql = "INSERT INTO product VALUES ('$_POST[id_pro]','$_POST[name_pro]','$_POST[image]'
'$_POST[num]','$_POST[price]','$_POST[desc]')";

if (pg_query($conn,$sql)){
    echo "Records added successfully.";
} else {
    echo "Records failed.";
}  
?>
