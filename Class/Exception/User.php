<?php

namespace Class\Exception;

class User {

    public function __construct(public string $username, public string $password)
    {}

    public function isVerified(): bool
    {
        return true;
    }

    public function isBan(): bool
    {
        return false;
    }
}