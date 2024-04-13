<?php
namespace App\FactoryPattern\PizzaStore;

use App\FactoryPattern\Pizza\Pizza;

abstract class PizzaStore
{
    public function orderPizza(string $type): ?Pizza
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    abstract function createPizza(string $type): ?Pizza;
}