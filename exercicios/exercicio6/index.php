<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Math\PythagoreanTheorem;
use source\Models\Math\Bhaskara;


$triangle1 = new PythagoreanTheorem(3, 4);
$triangle1->calculate();
echo $triangle1->show();

$triangle1->setCathetusA(6);
$triangle1->setCathetusB(8);
$triangle1->calculate();
echo $triangle1->show();

$triangle2 = new PythagoreanTheorem(5, 12);
$triangle2->calculate();
echo $triangle2->show();


$equation1 = new Bhaskara(1, -5, 6);
$equation1->calculate();
echo $equation1->show();

$equation1->setB(-3);
$equation1->setC(2);
$equation1->calculate();
echo $equation1->show();

$equation2 = new Bhaskara(1, 2, 5);
$equation2->calculate();
echo $equation2->show();