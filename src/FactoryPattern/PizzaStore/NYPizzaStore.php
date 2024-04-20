<?php

namespace App\FactoryPattern\PizzaStore;

use App\FactoryPattern\Ingredient\NYPizzaIngredientFactory;
use App\FactoryPattern\Pizza\CheesePizza;
use App\FactoryPattern\Pizza\ClamPizza;
use App\FactoryPattern\Pizza\NYStyleCheesePizza;
use App\FactoryPattern\Pizza\Pizza;

class NYPizzaStore extends PizzaStore
{
    public function createPizza(string $item): ?Pizza
    {
        $pizza = null;
        $ingredientFactory = new NYPizzaIngredientFactory();
        if ($item == "チーズ") {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName("ニューヨークスタイルチーズピザ");
        } elseif ($item == "野菜") {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName("ニューヨークスタイル野菜ピザ");
        } elseif ($item == "アサリ") {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName("ニューヨークスタイルアサリピザ");
        } elseif ($item == "ペパロニ") {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName("ニューヨークスタイルペパロニピザ");
        }
        return $pizza;
    }
}
