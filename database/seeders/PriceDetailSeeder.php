<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\PriceDetail;

class PriceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PriceDetail::create(['price' => '500']);
        PriceDetail::create(['price' => '1000']);
    }
}
