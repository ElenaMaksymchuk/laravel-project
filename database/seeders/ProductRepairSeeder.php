<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductRepair;

class ProductRepairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductRepair::create(['price_detail_id' => '1', 'type_repair_id' => '2', 'product_brand_id' => '1']);
        ProductRepair::create(['price_detail_id' => '3', 'type_repair_id' => '4', 'product_brand_id' => '2']);
    }
}
