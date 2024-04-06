<?php
namespace App\ObserverPattern;

use App\ObserverPattern\interface\DisplayElement;
use App\ObserverPattern\interface\Observer;
use App\ObserverPattern\WeatherData;

/**
 * 現在の気象状況の表示クラス
 */
final class CurrentConditionsDisplay implements Observer, DisplayElement
{
   private float $temperature; 
   private float $humidity; 
   private WeatherData $weatherData; 

   public function __construct(WeatherData $weatherData)
   {
      $this->weatherData = $weatherData;
      $this->weatherData->registerObserver($this);
   }

   public function update()
   {
      $this->temperature = $this->weatherData->getTemperature();
      $this->humidity = $this->weatherData->getHumidity();
      $this->display();
   }

   public function display(): void
   {
      echo "現在の気象状況：温度" . $this->temperature . "度 湿度" . $this->humidity . "%\n";
   }
}
