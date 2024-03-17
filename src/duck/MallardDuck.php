<?php

/**
 * マガモクラス
 */
final class MallardDuck extends Duck
{
	public function __construct()
	{
		$this->quackBehavior = new Quack();
		$this->flyBehavior = new FlyWithWings();
	}
	public function display() {
		print_r("私はマガモです");
	}
}
