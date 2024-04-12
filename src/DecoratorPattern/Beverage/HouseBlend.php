<?php
namespace App\DecoratorPattern\Beverage;

final class HouseBlend extends Beverage
{
    public function __construct()
    {
       $this->description = "ハウスブレンドコーヒー"; 
    }

    public function cost(): float
    {
        return 0.89;
    }
}