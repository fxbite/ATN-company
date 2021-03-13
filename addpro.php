<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products form</title>
    <style>
      .container-center {
        text-align: center;
      }

    </style>    
</head>
<body>
    <form action="insert_pro.php" method="POST" class="container-center">
         <label>Id Product:</label><br>
         <input type="text" name="id_pro"><br><br>
         <label>Name Product:</label><br>
         <input type="text" name="name_pro"><br><br>
         <label>Image:</label><br>
         <input type="file" name="image"><br><br>
         <label>Number:</label><br>
         <input type="number" name="num"><br><br>
         <label>Price:</label><br>
         <input type="text" name="price"><br><br>
         <label>Description:</label><br>
         <textarea type="text" name="num" placeholder="Descript here..." rows="4" cols="50">   
         </textarea><br><br>
         <input type="submit" value="Add info">
        
    </form> 
</body>
</html>