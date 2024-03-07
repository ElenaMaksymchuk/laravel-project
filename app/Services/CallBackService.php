<?php

namespace App\Services;

use App\Models\CallBack;

class CallBackService
{
    public function getAllCallBacks()
    {
        return CallBack::all();
    }
    public function createCallBack(array $data)
    {
        return CallBack::create($data);
    }
}