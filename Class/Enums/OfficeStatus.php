<?php

namespace Class\Enums;

//You can define the status with a class like that
/*class OfficeStatus {

    public const APPROVAL_PENDING = 'pending';
    public const APPROVAL_APPROVED = 'approved';
    public const APPROVAL_REJECTED = 'rejected';
}*/

// Or by an Enum

enum OfficeStatus {

    case APPROVAL_PENDING;
    case APPROVAL_APPROVED;
    case APPROVAL_REJECTED;
}
