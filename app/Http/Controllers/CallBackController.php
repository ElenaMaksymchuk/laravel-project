<?php

namespace App\Http\Controllers;
use App\Services\CallBackService;
use Illuminate\Http\Request;

class CallBackController extends Controller
{
    protected $callBackService;
    public function __construct(CallBackService $callBackService)
    {
        $this->callBackService = $callBackService;
    }
    public function index()
    {
        $callbacks = $this->callBackService->getAllCallBacks();
        return response()->json($callbacks);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            "phone" => ['required', 'string', 'max:255']
        ]);
        $callBack = $this->callBackService->createCallBack($data);
        return response()->json($callBack);
    }

}
