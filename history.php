<?php
	require_once("./resources/config.php");

	require_once(TEMPLATES_PATH . "/header.php");
?>

<div class = "section" id = ""> 
	<?php
		$query = "SELECT Product.photo, Product.product_name, Product.description, Product.price, 
					User_Product_Purchase.date, User_Product_Purchase.quantity 
					FROM Product INNER JOIN User_Product_Purchase ON Product.ID = User_Product_Purchase.product_id"; //where user=session
		$result = mysqli_query($conn, $query);
		if ($result) {
			while ($row = mysqli_fetch_assoc($result)){
				echo $row["photo"].$row["product_name"].$row["date"]. "<br>" 
					.$row["description"]. "<br>" .$row["quantity"].$row["price"]."<br>";		//	printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
			}
		}

	?>
</div>

<div class="divider"></div>

<a class="waves-effect waves-light btn"><i class="material-icons left">attach_money</i>Buy</a>
<?php

	require_once(TEMPLATES_PATH . "/footer.php");
?>