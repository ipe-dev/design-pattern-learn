<?php

namespace App\DecoratorPattern\Condiment;

use App\DecoratorPattern\Beverage\Beverage;

abstract class CondimentDecorator extends Beverage
{
    public Beverage $beverage;
    // abstract public function getDescription(): string;
}
