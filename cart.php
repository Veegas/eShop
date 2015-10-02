<?php     
	session_start();
    if (!isset($_SESSION['cart'])) {
    	$_SESSION['cart'] = [];
    }
    if (!in_array($_POST["itemId"], $_SESSION['cart'])) {
    	array_push($_SESSION['cart'], $_POST["itemId"]);
    }

    echo json_encode($_SESSION['cart']); 
 ?>