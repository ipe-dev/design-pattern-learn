<?php

namespace App\FactoryPattern\Pizza;

final class NYStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "ニューヨークスタイルのソース&チーズピザ";
        $this->dough = "薄いクラフト生地";
        $this->sauce = "真理ならソース";

        $this->toppings[] = "すりおろしたレッジャーノチーズ";
    }
}
