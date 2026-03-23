<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Game\Warrior;
use source\Models\Game\Wizard;
use source\Models\Game\Thief;


$warrior = new Warrior("Thor", 150, 50, 80, 100);
echo $warrior->describe();


$wizard = new Wizard("Merlin", 100, 200, 40, 120);
echo $wizard->describe();


$thief = new Thief("Loki", 90, 60, 50, 130);
echo $thief->describe();