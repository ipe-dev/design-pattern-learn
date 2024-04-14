<?php

namespace App\FactoryPattern\Ingredient;


final class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }

    public function createVeggies(): array
    {
        $veggies = [
            new BlackOlives(),
            new Spinach(),
            new EggPlant(),
        ];
        return $veggies;
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clams
    {
       return new FrozenClams(); 
    }
}
