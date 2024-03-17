<?php

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
