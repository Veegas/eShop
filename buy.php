<?php 
    session_start();
    // load up your config file
    require_once("./resources/config.php");

	/*$query = "UPDATE `Product` SET `quantity` = quantity - 1 WHERE `Product`.`ID` = " . $_POST["item-id"] ;

	$result = mysqli_query($conn , $query);

	echo $result;*/
	$cart_ids = $_SESSION["cart"];
	if (isset($cart_ids) && isset($_SESSION['user'])) {
		foreach ($cart_ids as $p_id) {
			$query = "UPDATE `Product` SET `quantity` = quantity - 1 WHERE `Product`.`ID` = " . $p_id ;
			$result = mysqli_query($conn , $query);
			echo $result;	
			$query2 = "INSERT INTO `User_Product_Purchase` (`product_id`, `user_id`, `quantity`) VALUES (" . $p_id .  ", " . $_SESSION['user'] . ", 1);";
			$result2 - mysqli_query($conn, $query2);
			echo $result2;	
		}
	} else {
		echo "<H2> PLEASE LOGIN BEFORE ATTEMPTING TO BUY </H2>";
	}
	

 ?>