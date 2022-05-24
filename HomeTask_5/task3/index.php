<?php

require_once 'Product.php';
require_once 'Cart.php';

// include 'Product.php';
// include 'Cart.php';

$prod1 = new Product('Печенье', 500);
$prod2 = new Product('Конфеты', 800);
$prod3 = new Product('Шоколад', 1000);
$prod4 = new Product('Подарочный набор', null, [$prod2, $prod3]);

$cart = new Cart();

$cart->addProduct($prod3);
$cart->addProduct($prod4);

echo "Стоимость корзины: " . $cart->getTotal();
