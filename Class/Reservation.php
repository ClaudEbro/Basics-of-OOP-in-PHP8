<?php

namespace Class;

class Reservation {

    //To define once a class like a design pattern as a singleton
    public static ?self $_instance = null;

    public function __construct (
    ){
        echo 'Nouvelle instance !';
    }

    public static function getInstance() : self
    {
        if(is_null(self::$_instance)){
            self::$_instance = new self;
        }

        return self::$_instance;
    } 
}