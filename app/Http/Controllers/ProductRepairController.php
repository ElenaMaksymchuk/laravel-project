<?php

namespace App\Http\Controllers;

use App\Models\ProductRepair;

class ProductRepairController extends Controller
{
    public function index()
    {
        $test = ProductRepair::all();
        return response()->json($test);
    }
}
