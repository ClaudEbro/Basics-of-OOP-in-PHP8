<?php

namespace Class\Traits;

trait EspressoCoffeeTrait
{
    public function makeEspresso(): string // You can define function in protected or private.
    {
        return static::class. 'Make an Espresso.';
    }

    //You can also define getters or an other trait.
}