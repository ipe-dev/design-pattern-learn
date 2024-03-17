<?php

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
