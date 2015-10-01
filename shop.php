
<?php
?>

<?php    
    // load up your config file
    require_once("./resources/config.php");
     
    require_once(TEMPLATES_PATH . "/header.php");
    // require_once(TEMPLATES_PATH . "/authentication.php");
?>


<div class ="container">
  <?php 

        $query = "SELECT * FROM Product ";
        $result = mysqli_query($conn, $query);
    if ($result) {
        echo "RESULT WOWO";
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["ID"]. " - Name: " . $row["product_name"]. "<br>";
        }
    } else {
        echo "No results";
    }


   ?>  
</div>

<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>