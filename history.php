<?php
	require_once("./resources/config.php");

	require_once(TEMPLATES_PATH . "/header.php");
?>
<div class="container">
	<?php
		$query = "SELECT Product.photo, Product.product_name, Product.description, Product.price, 
					User_Product_Purchase.date, User_Product_Purchase.quantity 
					FROM Product INNER JOIN User_Product_Purchase ON Product.ID = User_Product_Purchase.product_id 
					WHERE User_Product_Purchase.user_id = $_SESSION["user"]";
		$result = mysqli_query($conn, $query);
	?>
				<table class="bordered centered" id="history-table">
		        <thead>
		          <tr> 
		              <th data-field="photo"></th>
		              <th data-field="name">Item Name</th>
		              <th data-field="description">Description</th>
		              <th data-field="date">Date</th>
		              <th data-field="price">Item Price</th>
		              <th data-field="quantity">Quantity</th>
		          </tr>
		        </thead>
	<?php
		if ($result) {
			 while ($row = mysqli_fetch_assoc($result)){ ?>

		        <tbody>
		          <tr>
		            <td><img src="<?php echo $row['photo']; ?>" alt="" class="history-img"></td>
		            <td id= "history-name"><?php echo $row["product_name"]?></td>
		            <td id="history-description"><?php echo $row["description"]?></td>
		            <td id="history-description"><?php echo $row["date"]?></td>
		            <td><?php echo "$ ".$row["price"]?></td>
		            <td><?php echo $row["quantity"]?></td>
		          </tr>
	<?php 
	        }
	    } 
    ?> 
				</tbody>
				</table>

</div>
<?php
	require_once(TEMPLATES_PATH . "/footer.php");
?>