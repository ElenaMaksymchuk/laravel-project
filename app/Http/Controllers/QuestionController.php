<?php

namespace App\Http\Controllers;
use App\Services\QuestionService;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    protected $questionService;
        public function __construct(QuestionService $questionService)
        {
            $this->questionService = $questionService;
        }
    public function index()
    {
        $questions = $this->questionService->getAllQuestions();
        return response()->json($questions);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'fullname' => ['required', 'string', 'max:255']  ,
            'phone' => ['required', 'string', 'max:255']  ,
            'email' => ['required', 'string', 'max:255']  ,
            'question_category_id' => ['required', 'integer', 'max:255'],
            'product_brand_id' => ['required', 'integer', 'max:255']  ,
            'question' => ['required', 'string', 'max:255']
        ]);
        $question = $this->questionService->createQuestion($data);
        return response()->json($question); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
