<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        Review::create(['id' => 1, 'fullname' => 'Олексій', 'phone' => '+380661666755', 'email' => '9QqJt@example.com', 'review_type_id' => 1, 'text' => 'Дуже задоволений роботою сервісного центру, швидко виправили поломку і ціна була доступною. Рекомендую!']);
        Review::create(['id' => 2, 'fullname' => 'Ірина', 'phone' => '+380661666755', 'email' => '9QqJt@example.com', 'review_type_id' => 2, 'text' => 'Моя хлібопічка знову працює як нова після візиту до сервісного центру. Професіональний підхід і швидка робота.']);
        Review::create(['id' => 3, 'fullname' => 'Петро', 'phone' => '+380661666755', 'email' => '9QqJt@example.com', 'review_type_id' => 2, 'text' => 'Велике спасибі за швидке виправлення мого телефону. Якість обслуговування на висоті!']);
        Review::create(['id' => 4, 'fullname' => 'Ольга', 'phone' => '+380661666755', 'email' => '9QqJt@example.com', 'review_type_id' => 3, 'text' => 'Привітний персонал, якісний ремонт і швидка доставка. Дуже задоволений результатом.']);
        Review::create(['id' => 5, 'fullname' => 'Василь', 'phone' => '+380661666755', 'email' => '9QqJt@example.com', 'review_type_id' => 1, 'text' => 'Сервісний центр врятував мій холодильник! Професіонали своєї справи, рекомендую звертатися саме сюди.']);
    }
}