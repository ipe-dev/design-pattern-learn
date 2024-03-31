<?php

use App\ObserverPattern\CurrentConditionsDisplay;
use App\ObserverPattern\WeatherData;

require_once "vendor/autoload.php";

$weatherData = new WeatherData();

$currentConditionsDisplay = new CurrentConditionsDisplay($weatherData);

$weatherData->setMeasurements(80, 65, 30.4);