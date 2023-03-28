<?php

namespace Exceptions;

class RouteNotFoundException extends \Exception
{
    protected $message = 'This route does not exist.';
}
