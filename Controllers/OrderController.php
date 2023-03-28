<?php

namespace Controllers;

use Source\Renderer;
use Models\Order;

class OrderController
{

    public function index(): Renderer
    {
        $orderModel = new Order();
        $orders = $orderModel->withStatus(OrderStatus::Delivered);

        return Renderer::make('orders/index', compact('orders'));
    }
}