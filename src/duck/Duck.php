<?php
namespace App\duck;

use App\duck\interface\FlyBehavior;
use App\duck\interface\QuackBehavior;

/**
 * Duckの抽象クラス
 */
abstract class Duck
{
	public FlyBehavior $flyBehavior;
	public QuackBehavior $quackBehavior;
	public function __construct()
	{
	}

	public function setFlyBehavior(FlyBehavior $fb): void
	{
		$this->flyBehavior = $fb;
	}

	public function setQuackBehavior(QuackBehavior $qb): void
	{
		$this->quackBehavior = $qb;
	}

	abstract public function display(): void;

	public function performFly(): void
	{
		$this->flyBehavior->fly();
	}

	public function performQuack(): void
	{
		$this->quackBehavior->quack();
	}

	public function swim(): void
	{
		print_r("全てのカモは浮きます");
	}
}
