<?php

use App\ObserverPattern\CurrentConditionsDisplay;
use App\ObserverPattern\HeatIndexDisplay;
use App\ObserverPattern\WeatherData;

require_once "vendor/autoload.php";

$weatherData = new WeatherData();

$currentConditionsDisplay = new CurrentConditionsDisplay($weatherData);
$heatIndexDisplay = new HeatIndexDisplay($weatherData);

$weatherData->setMeasurements(80, 65, 30.4);