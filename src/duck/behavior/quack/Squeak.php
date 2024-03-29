<?php

namespace App\duck\behavior\quack;
use App\duck\interface\QuackBehavior;
/**
 * キューキューなく振る舞い
 */
final class Squeak implements QuackBehavior
{
    public function quack(): void
    {
        print_r("キューキュー");
    }
}
