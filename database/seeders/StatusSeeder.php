<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Status;
class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create(['text' => 'Status 1']);
        Status::create(['text' => 'Status 2']);
    }
}
