<?php
namespace App\duck\behavior\fly;

use App\duck\interface\FlyBehavior;

/**
 * undocumented class
 */
final class FlyRocketPowered implements FlyBehavior
{
    public function fly(): void
    {
        echo "ロケットで飛んでいます！\n";
    }
}
