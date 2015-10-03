<?php
	require_once("./resources/config.php");


	require_once(TEMPLATES_PATH . "/header.php");
				$total_price=0;
				$temp=0;
	
?>
<div class="container">
	<table class="bordered centered" id="history-table">
    <thead>
      <tr> 
          <th data-field="photo"></th>
          <th data-field="name">Item Name</th>
          <th data-field="description">Description</th>
          <th data-field="price">Item Price</th>
          <th data-field="quantity"> Quantity </th>
          <th data-filed="total">Total</th>
      </tr>
    </thead>
		<?php
			//get cart items from session
			if (isset($_SESSION["cart"])){
				$cart_products = $_SESSION["cart"];
				foreach ($cart_products as $popped) {
				 	# code...
				 
					//$popped= array_pop($cart_paroducts);
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
			            <td>
		                   <button class="btn-floating waves-effect waves-light left remove-cart-btn deep-orange" type="button" onclick="removeFromCart(event, <?php echo $row["ID"] ?>);" >
                                <i class="material-icons right">remove_circle_outline</i>
                            </button>
                         </td>
		     			<?php $total_price+= $row["price"];
					}
				}
			}
					?>
		          </tr>
		            <tr><td></td><td></td><td></td><td></td><td></td>
		            <td ><?php echo "$ ".$total_price?></td></tr>
				</tbody>
				</table>
				<br><br>
	<form action="buy.php" method="POST">
		
			
		 <button class="btn waves-effect waves-light right" type="submit" name="action">Proceed to Checkout
    <i class="material-icons right">send</i>
  </button>
	</form>
	<br><br>

</div>
<?php
	require_once(TEMPLATES_PATH . "/footer.php");
?>

<script>
	
        var removeFromCart = function removeFromCart (event, itemId) {
            $.post('removeCart.php', {'itemId': itemId}, function(data) {
                console.log(data);
                $(event.target).parents("tr").remove();
            });
            
        }
</script>