<?php

namespace App\DecoratorPattern\Beverage;

final class Espresso extends Beverage
{
    public function __construct()
    {
        $this->description = "エスプレッソ";
    }
    public function cost(): float
    {
        return 1.99;
    }
}
