<?php    
    // load up your config file
    require_once("./resources/config.php");
     
    require_once(TEMPLATES_PATH . "/header.php");
    // require_once(TEMPLATES_PATH . "/authentication.php");
?>

<script>
        var signIn = function signIn(event) {
            $("#modal1").openModal();
    }
</script>

<div class ="container">
    <div class="row products-row">
        
  <?php 

        $query = "SELECT * FROM Product ";
        $result = mysqli_query($conn, $query);
    if ($result) {
            // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
?>  
    <form class="buy-form" action="buy.php" method="post" onsubmit=<?php if (!isset($_SESSION["user"])) { echo "'event.preventDefault(); signIn();'"; } ?>>
        <div class="col s4 md4 l4 products-item">
        <input type="text" name="item-id" value="<?php echo $row["ID"]; ?>" hidden>
            <img class="materialboxed products-img" data-caption="<?php  echo $row["description"] ?>" src="<?php echo $row['photo']; ?>" alt="" >
            <table class="product-caption">
                <tr>
                    <td class="left-align">
                        <?php echo $row["product_name"] ?>
                    </td>
                    <td class="right-align">
                        <?php echo $row["price"]; ?>$
                    </td>
                </tr>
                <tr>
                    <td class="left-align">
                        <?php echo $row["quantity"] ?>
                    </td>

                    <td class="right-align">
                        <?php if ($row["quantity"] > 0) { ?>
                            <button class="btn waves-effect waves-light" type="submit" name="action">
                                Buy
                                <i class="material-icons right">shopping_cart</i>
                            </button>
                        <?php  } else { ?>
                        <button class="btn disabled waves-effect waves-light">
                            Out of Stock
                            <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php  } ?>
                    </td>
                </tr>
            </table>
        </div>
    </form>
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