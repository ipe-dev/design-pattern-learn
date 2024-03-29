<?php
namespace App\duck;

use App\duck\behavior\quack\Quack;
use App\duck\behavior\fly\FlyWithWings;
use App\duck\Duck;
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
	public function display(): void
	{
		echo "私はマガモです";
	}
}
