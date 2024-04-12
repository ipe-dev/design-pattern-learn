<?php

namespace App\DecoratorPattern\Beverage;

final class DarkRoast extends Beverage
{
    public function __construct()
    {
       $this->description = "ダークロースト"; 
    }

    public function cost(): float
    {
        return 0.99;
    }
}
