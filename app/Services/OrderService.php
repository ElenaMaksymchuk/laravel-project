<?php

namespace App\Services;

use App\Models\Order;

class OrderService
{
    public function getAllOrders()
    {
        return Order::all();
    }
    public function createOrder(array $data)
    {
        return Order::create($data);
    }
}