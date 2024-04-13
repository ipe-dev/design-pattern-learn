<?php
namespace App\FactoryPattern\Pizza;

class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
       $this->name = "シカゴスタイルのディープディッシュチーズピザ"; 
       $this->dough  = "極厚クラストきじ";
       $this->sauce = "ブラムトマトソース";

       $this->toppings[] = "シュレッドモツァレラチーズ";
    }

    public function cut(): void
    {
        echo "ピザを四角形にカットする";
    }
}