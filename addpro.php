<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products form</title>
</head>
<body>
    <form action="insert_pro.php" method="POST">
        <label>Id Product:</label><br>
        <input type="text" name="id_pro"><br>
        <label>Name Product:</label><br>
        <input type="text" name="name_pro"><br>
        <label>Image:</label><br>
        <input type="file" name="image"><br>
        <label>Number:</label><br>
        <input type="number" name="num"><br><br>
        <label>Price:</label><br>
        <input type="text" name="price"><br><br>
        <label>Description:</label><br>
        <textarea type="text" name="num" placeholder="Descript here..."></textarea<br><br>
        <input type="submit" value="Add info">
    </form> 
    
</body>
</html>