<!DOCTYPE html>
<html>
	<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<title>Our products</title>
		<style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
	</head>
	<body>
	<div class="container" style="width: 65%">
        <h2>Shopping Cart</h2>
        <?php
		    require_once 'connect.php';
			$conn = connectdb();
            $query = "SELECT * FROM product ORDER BY idPro ASC ";
            $result = pg_query($conn,$query);
            if(pg_num_rows($result) > 0) {

                while ($row = pg_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="POST" action="products.php?action=add&id=<?php echo $row['idPro']; ?>">

                            <div class="product">
                                <img src="<?php echo $row['image']; ?>" class="img-responsive">
                                <h5 class="text-info"><?php echo $row['namePro']; ?></h5>
                                <h5 class="text-danger"><?php echo $row['price']; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row['namePro']; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>

        
    </div>

	</body>
</html>

<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>