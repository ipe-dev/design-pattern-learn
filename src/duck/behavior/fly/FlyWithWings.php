<?php

/**
 * 飛ぶ振る舞いのクラス
 */
final class FlyWithWings implements FlyBehavior
{
    public function fly(): void
    {
        print_r("飛んでいます！！");
    }
}
