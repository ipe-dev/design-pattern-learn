<?php

use App\FactoryPattern\PizzaStore\ChicagoPizzaStore;
use App\FactoryPattern\PizzaStore\NYPizzaStore;

require_once "vendor/autoload.php";

$nyStore = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$pizza = $nyStore->orderPizza("チーズ");
echo "イーサンの注文は" . $pizza->getName() . PHP_EOL;

$pizza = $chicagoStore->orderPizza("チーズ");
echo "ジョエルの注文は" . $pizza->getName() . PHP_EOL;