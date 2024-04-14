<?php

namespace App\FactoryPattern\Ingredient;


final class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        $veggies = [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper(),
        ];
        return $veggies;
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clams
    {
       return new FreshClams(); 
    }
}
