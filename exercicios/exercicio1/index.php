<?php

use source\Models\Product;

require __DIR__ . "/../../source/autoload.php";

$products = [
    new Product(1, "Mouse", 100),
    new Product(2, "Teclado", 200),
    new Product(3, "Monitor", 300),
    new Product(4, "Gabinete", 400),
    new Product(5, "Memoria RAM", 1000),
    
];

$products[1]->discount(10);

foreach ($products as $product) {
    echo $product->show();  "<br>";
}