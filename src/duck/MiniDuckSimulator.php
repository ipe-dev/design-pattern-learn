<?php
require_once "vendor/autoload.php";

use App\duck\behavior\fly\FlyRocketPowered;
use App\duck\MallardDuck;
use App\duck\ModelDuck;

$mallard = new MallardDuck();
$mallard->performQuack();
$mallard->performFly();

$model = new ModelDuck();
$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();