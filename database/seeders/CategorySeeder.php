<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => "Телефони"]);
        Category::create(['name' => "Комп'ютери"]);
        Category::create(['name' => "Монітори"]);
        Category::create(['name' => "Пилососи"]);
        Category::create(['name' => "Холодильники"]);
        Category::create(['name' => "Телевізори"]);
        Category::create(['name' => "Хлібопічки"]);
    }
}
