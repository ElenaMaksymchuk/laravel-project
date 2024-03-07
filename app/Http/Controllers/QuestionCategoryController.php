<?php

namespace App\Http\Controllers;
use App\Services\QuestionCategoryService;
use Illuminate\Http\Request;

class QuestionCategoryController extends Controller
{  
        protected $questionCategoryService;
        public function __construct(QuestionCategoryService $questionCategoryService)
        {
            $this->questionCategoryService = $questionCategoryService;
        }
        public function index()
        {
            $questionCategories = $this->questionCategoryService->getAllQuestionCategories();
            return response()->json($questionCategories);
        }
    }
