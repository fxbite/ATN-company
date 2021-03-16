<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order_detail</title>
</head>
<body>
	<h3>Order Details</h3>
	<?php
		    require_once 'connect.php';
			$conn=connectDB();
            $sql = "select * from product where 'idPro'='1'";
            
            $products= pg_query($conn, $sql);
            echo $products;
            $i= 9;
            $count = 0;
            while ($count < $i && $row = pg_fetch_assoc($products)) {  
            $count++;
			?>
			<img src="assets/img/data/<?php echo $row['image']; ?>" class="img-responsive">	
			<?php }	?>
</body>
</html>