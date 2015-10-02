<?php     
	session_start();
    if (!isset($_SESSION['cart'])) {
    	$_SESSION['cart'] = [];
    }
    	$key = array_search($_POST["itemId"], $_SESSION['cart']);
		if($key!==false){
    		unset($_SESSION['cart'][$key]);
		}

    echo json_encode($_SESSION['cart']); 
 ?>