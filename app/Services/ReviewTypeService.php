<?php

namespace App\Services;
use App\Models\ReviewType;

class ReviewTypeService
{
    public function getAllReviewsTypes()
    {
        return ReviewType::all();
    }

    public function getReviewType($id)
    {
        return ReviewType::find($id);
    }
}