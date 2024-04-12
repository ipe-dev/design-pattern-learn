<?php

namespace App\DecoratorPattern\Beverage;

abstract class Beverage
{
    public string $description = "不明な飲み物";

    public function getDescription(): string
    {
        return $this->description;
    }

    abstract public function cost(): float;
}
