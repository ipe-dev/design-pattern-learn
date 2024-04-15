<?php
namespace App\FactoryPattern\Pizza;

use App\FactoryPattern\Ingredient\PizzaIngredientFactory;

class CheesePizza extends Pizza
{

    public function __construct(
        public PizzaIngredientFactory $ingredientFactory,
    )
    {}

    public function prepare(): void
    {
        echo $this->name . "をした準備";
        $dough = $this->ingredientFactory->createDough();
        $sauce = $this->ingredientFactory->createSauce();
        $cheese = $this->ingredientFactory->createCheese();
    }
}
