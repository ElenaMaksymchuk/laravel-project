<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create(['user_id' => '1', 'category_id' => '2']);
        Order::create(['user_id' => '1', 'category_id' => '3']);
    }
}
