<?php

namespace Database\Seeders;

use App\Models\ReviewType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReviewType::create(['name' => 'Звичайний відгук']);
        ReviewType::create(['name' => 'Потрібно покращити']);
        ReviewType::create(['name' => 'Інше']);
    }
}
