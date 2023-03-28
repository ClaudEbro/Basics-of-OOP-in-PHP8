<?php

namespace Source\Enums;
use Source\Enums\OrderSmiley;

enum OrderStatus : int
{

    /**Before Enum**/
    
// public const DELIVERED = 1 ;
// public const CANCELLED = 2 ;
// public const PROCESSING = 3 ;


// public static function all(): array
// {
//     return [
//         self::DELIVERED,
//         self::CANCELLED,
//         self::PROCESSING 
//     ];
// }

    case Delivered = 1;
    case Cancelled = 2;
    case Processing = 3;

    public function toFrench(): string 
    {
        return match($this) {
          self::Delivered => 'Livré',
          self::Cancelled => 'Annulé', 
          self::Processing => 'En cours',
        };
    }

    /** To treat emoticon **/
    // public function toSmiley(): OrderSmiley 
    // {
    //     return match($this) {
    //       self::Delivered => OrderSmiley::Happy,
    //       self::Cancelled => OrderSmiley::Sad, 
    //       self::Processing => OrderSmiley::PokerFace,
    //     };
    // }

}