
<?php

$mysqli = mysqli_init();
if (!$mysqli) {
    die('mysqli_init failed');
}

if (!$mysqli->options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
    die('Setting MYSQLI_INIT_COMMAND failed');
}

if (!$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
    die('Setting MYSQLI_OPT_CONNECT_TIMEOUT failed');
}

if (!$mysqli->real_connect('localhost', 'eShop')) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

echo 'Success... ' . $mysqli->host_info . "\n";

        if ($result = mysqli_query($mysqli, "SELECT * FROM Product LIMIT 10")) {
            echo "Select returned %d rows.\n". mysqli_num_rows($result);

            /* free result set */
            mysqli_free_result($result);
        }
        echo $result . "FUCK ME";


 function __destruct()
{
   mysqli_close($this->connection);
}
?>

<?php    
    // load up your config file
    require_once("./resources/config.php");
     
    require_once(TEMPLATES_PATH . "/header.php");
    // require_once(TEMPLATES_PATH . "/authentication.php");
?>


<div class ="container">
  <?php 
        // $query = mysqli_query($mysqli, "SELECT * FROM `Product`");
      if ($result = $mysqli->query("SELECT * FROM Product LIMIT 10")) {
        printf("Select returned %d rows.\n", $result->num_rows);
     }
        echo "FUCK ME , ". $result;


   ?>  
</div>

<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>