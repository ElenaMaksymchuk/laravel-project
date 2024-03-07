<?php

namespace App\Http\Controllers;

use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $test = Message::all();
        return response()->json($test);
    }
}
