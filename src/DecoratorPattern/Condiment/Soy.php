<?php
namespace App\DecoratorPattern\Condiment;

use App\DecoratorPattern\Beverage\Beverage;

class Soy extends CondimentDecorator
{
    public function __construct(
        public Beverage $beverage,
    )
    {}

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . "、豆乳";
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 0.15;
    }
}