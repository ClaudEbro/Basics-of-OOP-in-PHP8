<?php

namespace Class\Traits;
use Class\Traits\Mailable;

class User
{
    use Mailable;

    public function authenticated(): string
    {
        return 'Authentification';
    }
}