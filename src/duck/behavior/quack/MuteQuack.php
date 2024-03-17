<?php

/**
 * 鳴かない振る舞い
 */
final class MuteQuack implements QuackBehavior
{
    public function quack(): void
    {
        print_r("<<沈黙>>");
    }
}
