<?php

namespace App\Http\Controllers;

use App\Models\Status;

class StatusController extends Controller
{
    public function index()
    {
        $test = Status::all();
        return response()->json($test);
    }
}
