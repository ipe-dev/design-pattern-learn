<?php

namespace App\duck\behavior\quack;
use App\duck\interface\QuackBehavior;
/**
 * ガーガー鳴く振る舞い
 */
final class Quack implements QuackBehavior
{
    public function quack(): void
    {
        print_r("ガーガー\n");
    }
}
