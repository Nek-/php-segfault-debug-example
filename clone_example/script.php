<?php

// script.php

require_once "Product.php";
require_once "Card.php";

$card = new Card();
$product = new Product($card);
$card->addProduct($product);

$clone = clone $card;
