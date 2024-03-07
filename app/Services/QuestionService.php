<?php

namespace App\Services;
use App\Models\Question;

class QuestionService
{
    public function getAllQuestions()
    {
        return Question::all();
    }

    public function createQuestion(array $data)
    {
        return Question::create($data);
    }
}