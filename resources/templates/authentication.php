    <?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['password-confirm']) && isset($_POST['first_name'])  && isset($_POST['last_name']))
    {
// username and password sent from Form
$myemail=mysqli_real_escape_string($conn,$_POST['email']); 
$mypassword=mysqli_real_escape_string($conn,$_POST['password']);
$myconfirmpass =  mysqli_real_escape_string($conn,$_POST['password-confirm']);
$myavatar =  mysqli_real_escape_string($conn,$_POST['avatar']);
$myfirstname =  mysqli_real_escape_string($conn,$_POST['first_name']);
$mylastname =  mysqli_real_escape_string($conn,$_POST['last_name']);

if($mypassword == $myconfirmpass){
$sql="INSERT INTO User (email, ID, password, first_name, last_name, avatar) VALUES ('$myemail', 'NULL', '$mypassword', '$myfirstname', '$mylastname', '$myavatar')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['print'] ="New record created successfully";
// $sql1 = "SELECT ID FROM 'User' WHERE 'email' = '$myemail' AND `password` = '$mypassword'"
$sql = "SELECT * FROM User WHERE email = '$myemail' AND password = '$mypassword'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION['user'] = $row["ID"];
         header("Location: index.php"); /* Redirect browser */
        exit();        
    }
} else {
    $_SESSION['user']= "failed to loginz ";
}
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
else {
    $error="passwords do not match";
    echo "passwords not match";
        }
    } else {
        $myemail=mysqli_real_escape_string($conn,$_POST['email']); 
        $mypassword=mysqli_real_escape_string($conn,$_POST['password']);

        $sql = "SELECT * FROM User WHERE email = '$myemail' AND password = '$mypassword'";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $_SESSION['user'] = $row["ID"];
                    $_SESSION['first_name']= $row["first_name"];
                    $_SESSION['last_name']= $row["last_name"];
                    $_SESSION['email']= $row["email"];
                    $_SESSION['password']= $row["password"];

                    header("Location: index.php"); /* Redirect browser */
                    exit();
                }
            } else {
            }
    }
}
?>

    <div>

    <div class="row">
        <div class="col s12">
            <ul class="tabs auth-tabs">
                <li class="tab col s3"><a href="#signup">Signup</a></li>
                <li class="tab col s3"><a class="active" href="#login">Login</a></li>
            </ul>
        </div>
    </div>

        <div id="signup" class="col s12">
            <div class="card">
                <div class="card-content white-text">
                    <div class="row">
                        <form action = "" method="post" class="col s12">
                            <div class="row row-edited">
                                <div class="div-input-half-left">
                                    <label for="first_name" required>First Name</label>
                                    <input id="first_name" name="first_name" type="text" class="validate input-position" required>

                                </div>
                                <div class="div-input-half">
                                    <label for="last_name">Last Name</label>

                                    <input id="last_name" name = "last_name" type="text" class="validate input-position" required>
                                </div>
                            </div>
                            <div class="row row-edited">
                                <div class="div-input-half-left">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" name = "email" class="validate input-position" required>
                                </div>
                                <div class="div-input-half">
                                    <label for="add-avatar">Add Avatar</label>
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
                                    <input id="password" type="password" name = "password" class="validate input-position" required>
                                </div>
                                <div class="div-input-half">
                                    <label for="password-confirm">Confirm password</label>
                                    <input id="password-confirm" type="password" name = "password-confirm" class="validate input-position" onkeyup="checkPass(); return false;" required>
                                </div>
                            </div>
                            <div class="row row-edited">
                                <div class="div-submit">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Signup
                                                <i class="material-icons right"></i>
                                    </button>
                                </div>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="login" class="col s12">
            <div class="card">
                <div class="card-content white-text">
                    <div class="row row-edited">
                        <form action = "#" method="post" class="col s12">
                            <div class="row row-edited">
                                <div class="input-full">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" name = "email" class="validate input-position" required>
                                </div>
                            </div>
                            <div class="row row-edited">
                                <div class="input-full">
                                    <label for="password">Password</label>
                                    <input id="password-login" type="password" name= "password" class="validate input-position" required>
                                </div>
                            </div>
                            <div class="row row-edited">
                                <div class="div-submit">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Login
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