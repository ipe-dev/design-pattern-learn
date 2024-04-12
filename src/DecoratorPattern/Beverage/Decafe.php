<?php
namespace App\DecoratorPattern\Beverage;

class CaffeineLess extends Beverage
{
    public function __construct()
    {
       $this->description = "カフェインレス"; 
    }

    public function cost(): float
    {
        return 1.05;
    }
}