<?php 

require_once __DIR__ . "/CreateDb.php";
require_once __DIR__ . "/php/component.php";

$database = new CreateDb('Productdb', 'Producttb');

if(isset($_POST['add'])){
  echo '<pre>';
  var_dump((int)$_POST['product_id']);
  echo '</pre>';
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
  <div class="card-wrapper">
    <?php 

    $result = $database->getData();

    while ($row = $result->fetch_assoc()) {
      component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
    }
    
    ?>

  </div>
</body>

</html>