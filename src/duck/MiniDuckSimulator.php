<?php
require_once "vendor/autoload.php";
use App\duck\MallardDuck;
$mallard = new MallardDuck();
$mallard->performQuack();
$mallard->performFly();