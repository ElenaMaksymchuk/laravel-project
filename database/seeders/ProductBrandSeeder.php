<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductBrand;

class ProductBrandSeeder extends Seeder
{
    public function run(): void
    {
        ProductBrand::create(['brand' => 'Samsung']);
        ProductBrand::create(['brand' => 'Xiaomi']);
        ProductBrand::create(['brand' => 'LG']);
        ProductBrand::create(['brand' => 'GameMax']);
        ProductBrand::create(['brand' => 'Zalman']);
        ProductBrand::create(['brand' => 'Chieftec']);
        ProductBrand::create(['brand' => 'DeepCool']);
        ProductBrand::create(['brand' => 'HyperX']);
    }
}
