<?php 
    session_start();
    // load up your config file
    require_once("./resources/config.php");

print_r($_POST);

	/*$query = "UPDATE `Product` SET `quantity` = quantity - 1 WHERE `Product`.`ID` = " . $_POST["item-id"] ;

	$result = mysqli_query($conn , $query);

	echo $result;*/
	$cart_ids = $_SESSION["cart"];
	foreach ($cart_ids as $p_id) {
		$query = "UPDATE `Product` SET `quantity` = quantity - 1 WHERE `Product`.`ID` = " . $p_id ;
		$result = mysqli_query($conn , $query);
		echo $result;	
		$query2 = "INSERT INTO `User_Product_Purchase` (`product_id`, `user_id`, `quantity`) VALUES
			($p_id, $_SESSION["user"], 1);"
	}
	

 ?>