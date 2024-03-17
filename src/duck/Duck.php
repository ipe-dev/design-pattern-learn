<?php

/**
 * undocumented class
 */
abstract class Duck  
{
    public QuackBehavior $quackBehavior;    

    public function performQuack(): void
    {
        $this->quackBehavior->quack();
    }
}
