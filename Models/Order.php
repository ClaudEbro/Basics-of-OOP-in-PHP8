<?php

namespace Models;
use Source\Enums\OrderStatus;

class Order extends Model
{
    public function withStatus(OrderStatus $orderStatus): array
    {
        return $this->where('status', $orderStatus);
    }
}
