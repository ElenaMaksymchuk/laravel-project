<?php

namespace App\Services;
use App\Models\ProductBrand;

class ProductBrandService
{
    public function getAllProductBrands()
    {
        return ProductBrand::all();
    }
}