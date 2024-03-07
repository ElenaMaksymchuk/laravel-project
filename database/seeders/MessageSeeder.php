<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Message;
class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Message::create(['user_id' => '1', 'manager_id' => '1', 'text' => 'Message 1']);
        Message::create(['user_id' => '2', 'manager_id' => '1', 'text' => 'Message 2']);
    }
}
