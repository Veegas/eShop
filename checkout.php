<?php
	require_once("./resources/config.php");
	    session_start();


	require_once(TEMPLATES_PATH . "/header.php");
				$total_price=0;
	
?>
<div class="container">
	<table class="bordered centered" id="history-table">
    <thead>
      <tr> 
          <th data-field="photo"></th>
          <th data-field="name">Item Name</th>
          <th data-field="description">Description</th>
          <th data-field="price">Item Price</th>
          <th data-field="quantity">Quantity</th>
          <th data-filed="total">Total</th>
      </tr>
    </thead>
		<?php
			//get cart items from session
			if (isset($_SESSION["cart"])){
				$cart_products = $_SESSION["cart"];
				while (isset($cart_products)) {
					$popped= array_pop($cart_paroducts);
					$query = "SELECT * FROM Product WHERE Product.ID=".$popped;
					$result = mysqli_query($conn, $query);
					if ($result) {
						$row = $result->fetch_assoc();
			?>
			        <tbody>
			          <tr>
			            <td><img src="<?php echo $row['photo']; ?>" alt="" class="history-img"></td>
			            <td id= "history-name"><?php echo $row["product_name"]?></td>
			            <td id="history-description"><?php echo $row["description"]?></td>
			            <td><?php echo "$ ".$row["price"]?></td>
			            <td id="checkout-quantity"><input value="1" type="number" min="1"></td>
		     			<?php $total_price+= $row["price"];
					}
				}
			}
					?>
		            <td ><?php echo "$ ".$total_price?></td>
		          </tr>
				</tbody>
				</table>
				<br><br>
	<form action="buy.php" method="POST">
		<input type="hidden" name="product_cart" value="<?php ?>">
			
		<a class="waves-effect waves-light btn right" type="submit"><i class="material-icons right">submit</i>Proceed to Checkout</a>
	</form>
	<br><br>

</div>
<?php
	require_once(TEMPLATES_PATH . "/footer.php");
?>