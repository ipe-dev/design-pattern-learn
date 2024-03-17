<?php

/**
 * ガーガー鳴く振る舞い
 */
final class Quack implements QuackBehavior
{
    public function quack(): void
    {
        print_r("ガーガー");
    }
}
