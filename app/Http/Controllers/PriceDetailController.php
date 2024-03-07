<?php

namespace App\Http\Controllers;

use App\Models\PriceDetail;

class PriceDetailController extends Controller
{
    public function index()
    {
        $test = PriceDetail::all();
        return response()->json($test);
    }
}
