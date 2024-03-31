<?php

namespace App\ObserverPattern\interface;

interface Observer
{
    public function update(float $temperature, float $humidity, float $pressure); 
}