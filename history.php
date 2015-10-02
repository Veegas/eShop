<?php
	require_once("./resources/config.php");

	require_once(TEMPLATES_PATH . "/header.php");
?>

	<?php
		$query = "SELECT Product.photo, Product.product_name, Product.description, Product.price, 
					User_Product_Purchase.date, User_Product_Purchase.quantity 
					FROM Product INNER JOIN User_Product_Purchase ON Product.ID = User_Product_Purchase.product_id"; //where user=session
		$result = mysqli_query($conn, $query);
		if ($result) {
			while ($row = mysqli_fetch_assoc($result)){
	?>
				<table>
		        <thead>
		          <tr>
		          	
		              <th data-field="photo"></th>
		              <th data-field="name">Item Name</th>
		              <th data-field="description">Description</th>
		              <th data-field="date">Date</th>
		              <th data-field="price">Item Price</th>
		              <th data-field="quantity">Quantity</th>
		              <th data-field="total_p">Total</th>
		          </tr>
		        </thead>

		        <tbody>
		          <tr>
		            <td><img src="<?php echo $row['photo']; ?>" alt="" width="100%" height="auto"></td>
		            <td><?php echo $row["photo"]?></td>
		            <td><?php echo $row["product_name"]?></td>
		            <td><?php echo $row["description"]?></td>
		            <td><?php echo $row["date"]?></td>
		            <td><?php echo $row["price"]?></td>
		            <td><?php echo $row["quantity"]?></td>
		          </tr>
				
						
			}
		}

<a class="waves-effect waves-light btn"><i class="material-icons left">attach_money</i>Buy</a>
<?php
	require_once(TEMPLATES_PATH . "/footer.php");
?>