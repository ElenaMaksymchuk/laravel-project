<?php

namespace App\Http\Controllers;

use App\Services\ReviewTypeService;
use Illuminate\Http\Request;
class ReviewTypeController extends Controller
{
    protected $reviewTypeService;
    public function __construct(ReviewTypeService $reviewTypeService)
    {
        $this->reviewTypeService = $reviewTypeService;
    }
    public function index()
    {
        $reviewsTypes = $this->reviewTypeService->getAllReviewsTypes();
        return response()->json($reviewsTypes);
    }
}
