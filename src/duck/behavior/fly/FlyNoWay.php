<?php
namespace App\duck\behavior\fly;
use App\duck\interface\FlyBehavior;
/**
 * 飛ばない振る舞いのクラス
 */
final class FlyNoWay implements FlyBehavior
{
    public function fly(): void
    {
        print_r("飛べません");
    }
}
