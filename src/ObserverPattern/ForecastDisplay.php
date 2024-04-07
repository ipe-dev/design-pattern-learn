<?php

use App\ObserverPattern\interface\DisplayElement;
use App\ObserverPattern\interface\Observer;
use App\ObserverPattern\WeatherData;

/**
 * 予報ディスプレイクラス
 */
final class ForecastDisplay implements Observer, DisplayElement
{
    private float $currentPressure = 29.92;
    private float $lastPressure;
    private WeatherData $weatherData;
    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }
    public function display(): void
    {
        echo "気圧 ". $this->currentPressure;
    }
    public function update()
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $this->weatherData->getPressure();
        $this->display();
    }
}
