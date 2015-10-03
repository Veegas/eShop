<?php
    require_once("../config.php");

// username and password sent from Form
$myemail=mysqli_real_escape_string($conn,$_POST['email']); 
$mypassword=mysqli_real_escape_string($conn,$_POST['password']);
$myconfirmpass =  mysqli_real_escape_string($conn,$_POST['password-confirm']);
$myavatar =  mysqli_real_escape_string($conn,$_POST['first_name']);
$myfirstname =  mysqli_real_escape_string($conn,$_POST['last_name']);
$mylastname =  mysqli_real_escape_string($conn,$_POST['password-confirm']);

if($mypassword == $myconfirmpass){
$sql="INSERT INTO User (email, ID, password, first_name, last_name, avatar) VALUES ('$myemail', 'NULL', '$mypassword', '$myfirstname', '$mylastname', '$myavatar')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// $result=mysqli_query($conn,$sql);
// echo $result;
// echo "ssd";

// $sql1="SELECT ID FROM 'User' WHERE 'email' = '$myemail' AND `password` = '$mypassword'"
// $result1=mysqli_query($conn,$sql);
// $row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
// $active1=$row1['active'];
// $count1=mysqli_num_rows($result1);


// // If result matched $myusername and $mypassword, table row must be 1 row
// if($count1==1)
// {

// $_SESSION['user']=$result1;

// header("location: index.php");
// }
// else 
// {
// $error="error logging in";
// }


}
else {
	$error="passwords do not match";
	echo "passwords not match";
}

?>