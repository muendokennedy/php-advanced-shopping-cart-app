<?php
// start a session 
session_start();

require_once __DIR__ . "/php/CreateDb.php";
require_once __DIR__ . "/php/component.php";

$database = new CreateDb('Productdb', 'Producttb');

if (isset($_POST['add'])) {
  // check if the cart session variable exists
  if (isset($_SESSION['cart'])) {

    $item_array_id = array_column($_SESSION['cart'], 'product_id');

    // Display some message if the product is already in the cart

    if (in_array($_POST['product_id'], $item_array_id)) {
      $_SESSION['flash']['already'] = 'The product is already in the cart';
    } else {
      $cartProducts = count($_SESSION['cart']);
      $item_array = [
        'product_id' => $_POST['product_id']
      ];
      $_SESSION['cart'][$cartProducts] = $item_array;
    }

  } else {
    $item_array = [
      'product_id' => $_POST['product_id']
    ];

    $_SESSION['cart'][0] = $item_array;
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>shopping cart</title>
</head>

<body>
  <?php

  require_once __DIR__ . "/php/header.php";

  ?>
  <?php

  if (isset($_SESSION['flash']['already'])) {

    echo '<div class="alert-box">' . $_SESSION['flash']['already'] . ' <button type="button">OK</button></div>';

    unset($_SESSION['flash']['already']);
  }

  ?>
  <div class="card-wrapper">
    <?php
    $result = $database->getData();

    while ($row = $result->fetch_assoc()) {
      component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
    }

    ?>

  </div>
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
</body>

</html>