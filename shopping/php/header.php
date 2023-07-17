<div class="navbar">
  <a href="index.php" class="col-1">
    <i class="fas fa-shopping-basket"></i>
    <h3>Shopping Cart</h3>
  </a>
  <a href="cart.php" class="col-2">
    <i class="fas fa-shopping-cart"></i>Cart
    <?php
    if (isset($_SESSION["cart"])) {
      $count = count($_SESSION["cart"]);
      echo '<span class="text-warning">' . $count . '</span>';
    } else {
      echo '<span class="text-warning">0</span>';
    }
    ?>
  </a>
</div>