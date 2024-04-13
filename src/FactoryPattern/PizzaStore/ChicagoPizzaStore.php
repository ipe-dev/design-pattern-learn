<?php

namespace App\FactoryPattern\PizzaStore;

use App\FactoryPattern\Pizza\ChicagoStyleCheesePizza;
use App\FactoryPattern\Pizza\Pizza;

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza(string $item): ?Pizza
    {
        if ($item == "チーズ") {
            return new ChicagoStyleCheesePizza();
        } elseif ($item == "野菜") {
            return new ChicagoStyleVeggiePizza();
        } elseif ($item == "アサリ") {
            return new ChicagoStyleClamPizza();
        } elseif ($item == "ペパロニ") {
            return new ChicagoStylePepperoniPizza();
        }
        return null;
    }
}
