<?php

namespace App\Http\Controllers;
use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderService;
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index()
    {
        $orders = $this->orderService->getAllOrders();
        return response()->json($orders);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            "phone" => ['required', 'string', 'max:255'],
            "email" => ['required', 'string', 'max:255'],
            "category_id" => ['required', 'string', 'max:255'],
            "text" => ['required', 'string', 'max:255']
        ]);
        $order = $this->orderService->createOrder($data);
        return response()->json($order);
    }
}
