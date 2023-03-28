<?php

namespace Class\Abstract;

class Bmw extends Vehicle {

    public function mark() : string {
        return 'I am an other german car and i am a ' .$this->mark . '.';
    }
}