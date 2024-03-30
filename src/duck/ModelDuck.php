<?php
namespace App\duck;

use App\duck\behavior\fly\FlyNoWay;
use App\duck\behavior\quack\Quack;

/**
 * 
 */
final class ModelDuck extends Duck
{
    public function __construct(
    ) {
		$this->flyBehavior = new FlyNoWay();
		$this->quackBehavior = new Quack();
    }

    public function display(): void
    {
		echo "模型のかもです\n";
    }
}
