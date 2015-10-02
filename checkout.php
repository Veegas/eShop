<?php
	require_once("./resources/config.php");

	require_once(TEMPLATES_PATH . "/header.php");
?>
<div class="container">
	<?php
		//get cart items from session
		$total_price=0;
	?>
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
			<?php //while (){ 
					$total_price+= price;?>

		        <tbody>
		          <tr>
		            <td><img src="<?php echo 'photo'; ?>" alt="" class=""></td>
		            <td id= "history-name"><?php echo "product_name";?></td>
		            <td id="history-description"><?php echo "description";?></td>
		            <td><?php echo "$ "."price"?></td>
		            <td type="number" min="1"></td>
		           <?php 
		           //} ?>
		            <td><?php echo "$ ".$total_price?></td>
		          </tr>
	<?php 
	    //} 
    ?> 
				</tbody>
				</table>
	<form action="buy.php" method="POST">
		<input type="hidden"
		<!-- take products in cart from session -->
		<a class="waves-effect waves-light btn right" type="submit"><i class="material-icons right">Submit</i>Proceed to Checkout</a>
	</form>
	<br><br>

</div>
<?php
	require_once(TEMPLATES_PATH . "/footer.php");
?>