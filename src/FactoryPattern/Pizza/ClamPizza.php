<?php
namespace App\FactoryPattern\Pizza;

use App\FactoryPattern\Ingredient\PizzaIngredientFactory;

class ClamPizza extends Pizza
{
    public function __construct(
        public PizzaIngredientFactory $ingredientFactory,
    )
    {}

    public function prepare(): void
    {
        echo $this->name . "を準備";
        $dough = $this->ingredientFactory->createDough();
        $sauce = $this->ingredientFactory->createSauce();
        $cheese = $this->ingredientFactory->createCheese();
        $clam = $this->ingredientFactory->createClam();
    }
}