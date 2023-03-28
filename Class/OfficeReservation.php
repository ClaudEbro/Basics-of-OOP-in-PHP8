<?php

/*
    CONST and ENUM
*/

namespace Class;

use Class\Enums\OfficeStatus;

class OfficeReservation {

    //To access the status

    public OfficeStatus $status;

    public function __construct() {

        //To call the status like that : 
        //echo OfficeReservation::APPROVAL_PENDING; // or : echo self::APPROVAL_PENDING; or : echo $this::APPROVAL_PENDING;

        //or by : 
        $this->status = OfficeStatus::APPROVAL_PENDING; 
        
    }
}