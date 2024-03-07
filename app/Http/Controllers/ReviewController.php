<?php

namespace App\Http\Controllers;

use App\Services\ReviewService;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    protected $reviewService;
    public function __construct(ReviewService $reviewService)
    {
        $this->reviewService = $reviewService;
    }
    public function index()
    {
        $reviews = $this->reviewService->getAllReviews();
        return response()->json($reviews);
    }   
    public function store(Request $request)
    {
        $data = $request->validate([
            'fullname' => ['required', 'string', 'max:255']  ,
            'phone' => ['required', 'string', 'max:255']  ,
            'email' => ['required', 'string', 'max:255']  ,
            'review_type_id' => ['required', 'integer', 'max:255'],
            'text' => ['required', 'string', 'max:255']
        ]);
        $review = $this->reviewService->createReview($data);
        return response()->json($review); 
    }
   
}
