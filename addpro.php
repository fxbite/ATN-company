<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Add products form</title>
    <style>
      .container-center {
        text-align: center;
      }

    </style>    
</head>
<body>
    <form action="insert_pro.php" method="POST" class="container-center">
        <fieldset>
         <legend>Input info products</legend>   
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
         <textarea type="text" name="desc" placeholder="Descript here..." rows="4" cols="50">   
         </textarea><br><br>
         <input type="submit" value="Add info">
        </fieldset>
    </form> 
</body>
</html>