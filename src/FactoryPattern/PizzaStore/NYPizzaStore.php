<?php

namespace App\FactoryPattern\PizzaStore;

use App\FactoryPattern\Pizza\NYStyleCheesePizza;
use App\FactoryPattern\Pizza\Pizza;

class NYPizzaStore extends PizzaStore
{
    public function createPizza(string $item): ?Pizza
    {
        if ($item == "チーズ") {
            return new NYStyleCheesePizza();
        } elseif ($item == "野菜") {
            return new NYStyleVeggiePizza();
        } elseif ($item == "アサリ") {
            return new NYStyleClamPizza();
        } elseif ($item == "ペパロニ") {
            return new NYStylePepperoniPizza();
        }
        return null;
    }
}
