<?php

session_start();

require_once __DIR__ . "/php/component.php";
require_once __DIR__ . "/php/CreateDb.php";

$database = new CreateDb('ProductDb', 'Producttb');

if (isset($_SESSION['cart'])) {
  if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
      foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['product_id'] == $_GET['id']) {
          unset($_SESSION['cart'][$key]);
          if (count($_SESSION['cart']) == 0) {
            unset($_SESSION['cart']);
          }
          $_SESSION['flash']['remove'] = 'The product has been removed from the cart!';
        }
      }
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>Cart Page</title>
</head>

<body>
  <?php

  require_once __DIR__ . "/php/header.php";

  ?>
  <?php

  if (isset($_SESSION['flash']['remove'])) {

    echo '<div class="alert-box">' . $_SESSION['flash']['remove'] . ' <button type="button">OK</button></div>';

    unset($_SESSION['flash']['remove']);
  }
  ?>
  <div class="cart-container">
    <div class="topic">
      <h4>My Cart</h4>
    </div>

    <?php

    $total = 0;

    if (isset($_SESSION['cart'])) {

      $productId = array_column($_SESSION['cart'], 'product_id');

      $result = $database->getData();

      while ($row = $result->fetch_assoc()) {
        foreach ($productId as $id) {
          if ($row['id'] === $id) {
            cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['id']);
            $total += (int) $row['product_price'];
          }
        }
      }
    } else {
      echo '<h4 class="empty-cart">Cart is empty</h4>';
    }

    ?>
    <div class="col-num-2">
      <div class="topic">
        <h4>PRICE DETAILS</h4>
      </div>
      <div class="price-display">
        <?php

        if (isset($_SESSION['cart'])) {
          $count = count($_SESSION['cart']);
          echo $count == 1 ? "<h4>Price ($count item)</h4>" : "<h4>Price ($count items)</h4>";
        } else {
          echo "<h4>Price (0 items)</h4>";
        }

        ?>
        <h5 class="payable-1"><span>
            <?php echo '$' . $total ?>
          </span></h5>
        <h5 class="delivery">Delivery charges <span>FREE</span></h5>
        <h5 class="payable">Amount Payable <span>
            <?php echo '$' . $total ?>
          </span></h5>
      </div>
    </div>
  </div>
</body>

<script>
  const alertBox = document.querySelector('.alert-box');
  const alertTogglerButton = document.querySelector('.alert-box button');
  // Ensure that there is no resubmission upon refreshing the current page url
  window.onload = () => {
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }

  }
  if (alertBox) {
    alertTogglerButton.onclick = () => {
      location.reload();
    }
  }
</script>

</html>