<?php

namespace App\Services;
use App\Models\QuestionCategory;

class QuestionCategoryService
{
    public function getAllQuestionCategories()
    {
        return QuestionCategory::all();
    }
}