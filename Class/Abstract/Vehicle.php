<?php

namespace Class\Abstract;

abstract class Vehicle {

    public function __construct(protected string $mark){}

    public function drive(): string {
        return 'I drive.';
    }

    abstract public function mark(): string;
}