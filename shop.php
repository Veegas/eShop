<?php    
    // load up your config file
    require_once("./resources/config.php");
     
    require_once(TEMPLATES_PATH . "/header.php");
    // require_once(TEMPLATES_PATH . "/authentication.php");
?>


<div class ="container">
    <div class="row">
        
  <?php 

        $query = "SELECT * FROM Product ";
        $result = mysqli_query($conn, $query);
    if ($result) {
            // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
?>  
        <div class="col s12 md6 l4 ">
            <img class="materialboxed" data-caption=<?php  echo $row["description"] ?> src="<?php echo $row['photo']; ?>" alt="" width="100%" height="auto">
        <table class="product-caption">
                <tr>
                    <td>
                        <?php echo $row["product_name"] ?>
                    </td>
                    <td>
                        <?php echo $row["price"]; ?>$
                    </td>
                </tr>
                <tr>
                    <td class="right">
                        In Stock <?php echo $row["quantity"]?>
                    </td>
                </tr>
        </table>
        </div>
           <?php 
        }
    } else {
        echo "No results";
    }
     ?> 


    </div>
</div>

<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>

<script>
$(document).ready(function(){
    $('.materialboxed').materialbox();
});
</script>