<?php

namespace App\FactoryPattern\Pizza;

abstract class Pizza
{
    public string $name;
    public Dough $dough;
    public Sauce $sauce;
    public Cheese $cheese;
    public array $veggies;
    public Pepperoni $pepperoni;
    public Clams $clam;
    abstract function prepare(): void;

    public function bake(): void
    {
        echo "180度で25分間焼く" . PHP_EOL;
    }
    public function cut(): void
    {
        echo "ピザを扇形にカットする" . PHP_EOL;
    }

    public function box(): void
    {
        echo "PizzaStoreの箱にピザを入れる" . PHP_EOL;
    }
    public function getName(): string
    {
        return $this->name;
    }
}
