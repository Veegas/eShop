<?php    
    // load up your config file
    require_once("./resources/config.php");
         session_start();

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
        <div class="col s4 md4 l4 ">
        <input class="item-id-input" type="text" name="item-id" value="<?php echo $row["ID"]; ?>" hidden>

            <div class="card products-item">
            <div class="card-image">
            <img class="activator products-img" data-caption="<?php  echo $row["description"] ?>" src="<?php echo $row['photo']; ?>" alt="" >
            </div>

            <div class="card-content ">
              <span class="card-title black-text"> <?php echo $row["product_name"] ?> </span>
              <span class="card-title black-text right"> <?php echo $row["price"]; ?>$ </span>
            </div>

            <div class="card-reveal">
              <span class="card-title black-text"> <?php echo $row["product_name"] ?> </span>
              <p> <?php echo $row["description"] ?> </p>
                                
            </div>
            <div class="card-action">
                    <tr>
                    <td class="left">
                            <button class="btn-floating waves-effect waves-light left cart-btn" type="button" onclick="addToCart(event);">
                                <i class="material-icons right">add_shopping_cart</i>
                            </button>
                    </td>

                        <?php if ($row["quantity"] > 0) { ?>
                            <button class="btn waves-effect waves-light right" type="submit" name="action">
                                Buy
                                <i class="material-icons right">shopping_cart</i>
                            </button>
                        <?php  } else { ?>
                        <button class="btn disabled waves-effect waves-light right">
                            No Stock
                            <i class="material-icons right">shopping_cart</i>
                        </button>
                    <?php  } ?>
                </tr>
            </div>
          </div>

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

        var addToCart = function addToCart(event) {
            var itemId = $(event.target).parents('form').find('.item-id-input').val();
            $.post('cart.php', {'itemId': itemId}, function(data) {
                console.log(data);
            });
        }
</script>