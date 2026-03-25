<?php

use source\Models\Order;

require __DIR__ . "/../../source/autoload.php";


$orders = [
    new Order(1, "Fabiano", 100),
    new Order(2, "José", 200),
    new Order(3, "Vinicius", 300),
    new Order(4, "Matheus", 400),
    new Order(5, "Tassigol", 1000),
    
];
$orders[0]->addFee(100);
foreach ($orders as $order) {
        echo $order->show();
}