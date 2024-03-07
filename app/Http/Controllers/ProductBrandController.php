<?php

namespace App\Http\Controllers;
use App\Services\ProductBrandService;

class ProductBrandController extends Controller
{
    protected $productBrandService;
        public function __construct(ProductBrandService $productBrandService)
        {
            $this->productBrandService = $productBrandService;
        }
        public function index()
        {
            $productBrands = $this->productBrandService->getAllProductBrands();
            return response()->json($productBrands);
        }
}
