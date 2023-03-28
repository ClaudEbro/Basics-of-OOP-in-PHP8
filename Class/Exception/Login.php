<?php

namespace Class\Exception;

use Class\Exceptions\UserNotVerifiedException;
use Class\Exceptions\UserIsBanException;

class Login {

    public function __construct(protected User $user)
    {}

    public function login(): bool {

        if(!$this->user->isVerified()){
            throw new UserNotVerifiedException();
        }

        if($this->user->isBan()){
            throw new UserIsBanException();
        }

        return true;
    }
} 