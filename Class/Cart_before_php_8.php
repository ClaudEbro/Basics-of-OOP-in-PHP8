<?php

class Cart {

    public int $quantity; //To define a default value (e.g. : public $quantity = 0;)
    public float $totalPrice; //To define a default value (e.g. : public $totalPrice = 50;)


    /* We can also define attribute with his type like that :
        public int $quantity = 0;
        public float $totalPrice = 50;
    */

    //It's recommanded to define default value with a constructor.

    public function __construct($quantity, $totalPrice) {
        $this->quantity = $quantity;
        $this->totalPrice = $totalPrice;
    }

    //We can define other methods in the class.

    public function getTotalPrice() : float // define the functionby typing
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(float $price) : void 
    {
        $this->totalPrice = $price;
    }

    public function discount(float $discount) : void 
    {
        $this->totalPrice -= $this->totalPrice*($discount/100);
    }
}