<?php

namespace App\ObserverPattern;

use App\ObserverPattern\interface\Subject;
use App\ObserverPattern\interface\Observer;

/**
 * 気象情報データクラス
 */
final class WeatherData implements Subject
{
	/** @var array<Observer> $observers オブザーバのリスト */
	private array $observers;
	private float $temperature;
	private float $humidity;
	private float $pressure;

	public function __construct()
	{
		$this->observers = [];	
	}

	public function registerObserver(Observer $o): void
	{
		$this->observers[] = $o;
	}
	public function removeObserver(Observer $o): void
	{
		$this->observers = array_filter($this->observers, function($observer) use ($o) {
			return $observer !== $o;
		});
	}
	public function notifyObservers(): void
	{
		foreach ($this->observers as  $observer) {
			$observer->update($this->temperature, $this->humidity, $this->pressure);
		}
	}

	public function measurementChanged(): void
	{
		$this->notifyObservers();
	}
	public function setMeasurements(float $temperature, float $humidity, float $pressure): void
	{
		$this->temperature = $temperature;
		$this->humidity = $humidity;
		$this->pressure = $pressure;
		$this->measurementChanged();
	}
}
