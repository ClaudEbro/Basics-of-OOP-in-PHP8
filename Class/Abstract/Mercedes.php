<?php

namespace Class\Abstract;

class Mercedes extends Vehicle {

    public function mark() : string {
        return 'I am a german car and i am a ' .$this->mark . '.';
    }
}