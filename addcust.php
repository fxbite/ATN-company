<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add customers form</title>
</head>
<body>
    <form action=" insert_cust.php" method="POST">
        <label>Id Custommer:</label><br>
        <input type="text" name="id_cust"><br>
        <label>Full Name:</label><br>
        <input type="text" name="name"><br>
        <label>Phone Number:</label><br>
        <input type="text" name="phone"><br>
        <label>Email:</label><br>
        <input type="text" name="email"><br><br>
        <input type="submit" value="Add info">
    </form> 
</body>
</html>