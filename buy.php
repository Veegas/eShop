<?php 
    session_start();
    // load up your config file
    require_once("./resources/config.php");

print_r($_POST);

	$query = "UPDATE `Product` SET `quantity` = quantity - 1 WHERE `Product`.`ID` = " . $_POST["item-id"] ;

	$result = mysqli_query($conn , $query);

	echo $result;
	
	

 ?>