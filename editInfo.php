<?php    
    // load up your config file
    require_once("./resources/config.php");

    require_once(TEMPLATES_PATH . "/header.php");
    // require_once(TEMPLATES_PATH . "/authentication.php");
?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
// username and password sent from Form
$myemail=mysqli_real_escape_string($conn,$_POST['email']); 
$mypassword=mysqli_real_escape_string($conn,$_POST['password']);
$myavatar =  mysqli_real_escape_string($conn,$_POST['avatar']);
$myfirstname =  mysqli_real_escape_string($conn,$_POST['first_name']);
$mylastname =  mysqli_real_escape_string($conn,$_POST['last_name']);

$sql = "UPDATE User SET email='$myemail', password = '$mypassword', first_name= '$myfirstname', last_name= '$mylastname', avatar = '$myavatar' WHERE id='$_SESSION[user]'";

if ($conn->query($sql) === TRUE) {
                    $_SESSION['first_name']= $myfirstname;
                    $_SESSION['last_name']= $mylastname;
                    $_SESSION['email']= $myemail;
                    $_SESSION['password']= $mypassword;

     header("Location: editInfo.php"); /* Redirect browser */
        exit();  
} else {
    $_SESSION['print']= "Error updating record: ";
}


    }

?>
<div class ="container">
      <div id="signup" class="col s12">
            <div class="card">
                <div class="card-content white-text">
                    <div class="row">
                        <form action = "" method="post" class="col s12">
                            <div class="row row-edited">
                                <div class="div-input-half-left">
                                    <label for="first_name" required>First Name</label>
                                    <input id="first_name" name="first_name" value="<?php echo $_SESSION['first_name']; ?>" type="text" class="validate " required>

                                </div>
                                <div class="div-input-half">
                                    <label for="last_name">Last Name</label>

                                    <input id="last_name" name = "last_name" value="<?php echo $_SESSION['last_name']; ?>" type="text" class="validate " required>
                                </div>
                            </div>
                            <div class="row row-edited">
                                <div class="div-input-half-left">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" value="<?php echo $_SESSION['email']; ?>" name = "email" class="validate " required>
                                </div>
                                <div class="div-input-half">
                                    <label for="add-avatar">Avatar</label>
                                   <div class="file-field input-field">
                                  <div class="btn">
                                    <span>Upload</span>
                                    <input type="file" name="avatar"  accept="image/gif, image/jpeg, image/png">
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                  </div>
                                </div>
                                </div>
                            </div>
                            <div class="row row-edited">
                                <div class="div-input-half-left">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" value="<?php echo $_SESSION['password']; ?>" name = "password" class="validate " required>
                                </div>
                            </div>
                            <div class="row row-edited">
                                <div class="div-submit">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Edit
                                                <i class="material-icons right"></i>
                                    </button>
                                </div>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>
