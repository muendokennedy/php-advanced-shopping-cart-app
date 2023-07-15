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
    <div class="card">
      <form action="index.php" method="post">
        <div class="img-box"><img src="upload/product1.png"></div>
        <div class="info-part">
          <div class="product-name">Apple MacBook Pro</div>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <div class="product-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci odio, quaerat.
          </div>
          <div class="product-price"><small><s>$590</s></small><span> $550 </span></div>
          <div class="addtocart-btn">
            <button type="submit" name="add">Add to cart <i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="product_id" value='1'>
          </div>
        </div>
      </form>
    </div>
    <div class="card">
      <form action="index.php" method="post">
        <div class="img-box"><img src="upload/product2.png"></div>
        <div class="info-part">
          <div class="product-name">Sony E7 Headphones</div>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <div class="product-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci odio, quaerat.
          </div>
          <div class="product-price"><small><s>$590</s></small><span> $550 </span></div>
          <div class="addtocart-btn">
            <button type="submit" name="add">Add to cart <i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="product_id" value='1'>
          </div>
        </div>
      </form>
    </div>
    <div class="card">
      <form action="index.php" method="post">
        <div class="img-box"><img src="upload/product3.png"></div>
        <div class="info-part">
          <div class="product-name">Sony Xperia Z4</div>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <div class="product-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci odio, quaerat.
          </div>
          <div class="product-price"><small><s>$590</s></small><span> $550 </span></div>
          <div class="addtocart-btn">
            <button type="submit" name="add">Add to cart <i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="product_id" value='1'>
          </div>
        </div>
      </form>
    </div>
    <div class="card">
      <form action="index.php" method="post">
        <div class="img-box"><img src="upload/product4.png"></div>
        <div class="info-part">
          <div class="product-name">Samsung Galaxy</div>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <div class="product-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci odio, quaerat.
          </div>
          <div class="product-price"><small><s>$590</s></small><span> $550 </span></div>
          <div class="addtocart-btn">
            <button type="submit" name="add">Add to cart <i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="product_id" value='1'>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>