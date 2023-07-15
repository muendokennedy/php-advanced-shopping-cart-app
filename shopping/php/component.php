<?php

function component($productName, $productPrice, $productImg, $productId){
  $element = '
  <div class="card">
  <form action="index.php" method="post">
    <div class="img-box"><img src="' . $productImg . '"></div>
    <div class="info-part">
      <div class="product-name">' . $productName . '</div>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <div class="product-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci odio, quaerat.
      </div>
      <div class="product-price"><small><s>$590</s></small><span> $' . $productPrice . '</span></div>
      <div class="addtocart-btn">
        <button type="submit" name="add">Add to cart <i class="fas fa-shopping-cart"></i></button>
        <input type="hidden" name="product_id" value=' . $productId . '>
      </div>
    </div>
  </form>
</div>';

echo $element;
}