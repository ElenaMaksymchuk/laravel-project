<?php

namespace App\Http\Controllers;
use App\Services\TypeRepairService;

class TypeRepairController extends Controller
{
    protected $typeRepairService;
    public function __construct(TypeRepairService $typeRepairService)
    {
        $this->typeRepairService = $typeRepairService;
    }
    public function index()
    {
        $typeRepairs = $this->typeRepairService->getAllTypeRepairs();
        return response()->json($typeRepairs);
    }
}
