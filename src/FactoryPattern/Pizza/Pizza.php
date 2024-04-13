<?php
namespace App\FactoryPattern\Pizza;

abstract class Pizza
{
    public string $name;
    public string $dough;
    public string $sauce;
    /** @var string[] */
    public array $toppings;

    public function prepare(): void
    {
        echo $this->name . "を下準備" . PHP_EOL;
        echo "生地をこねる". PHP_EOL;
        echo "ソースを追加". PHP_EOL;
        echo "トッピングを追加:". PHP_EOL;
        foreach ($this->toppings as  $topping) {
            echo " " . $topping . PHP_EOL;
        }
    }
    public function bake():void
    {
        echo "180度で25分間焼く" . PHP_EOL;
    }
    public function cut():void
    {
        echo "ピザを扇形にカットする" . PHP_EOL;
    }

    public function box():void
    {
        echo "PizzaStoreの箱にピザを入れる" . PHP_EOL;
    }
    public function getName(): string
    {
        return $this->name;
    }

}