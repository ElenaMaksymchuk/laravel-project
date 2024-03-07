<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\QuestionCategory;
class QuestionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuestionCategory::create(['id' => 1, 'name' => "Місцерозташування/час роботи"]);
        QuestionCategory::create(['id' => 2, 'name' => "Ціни"]);
        QuestionCategory::create(['id' => 3, 'name' => "Технічна консультація"]);
        QuestionCategory::create(['id' => 4, 'name' => "Купити аксесуари"]);
        QuestionCategory::create(['id' => 5, 'name' => "Інше"]);
    }
}