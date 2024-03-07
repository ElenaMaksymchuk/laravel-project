<?php

namespace App\Services;
use App\Models\Review;
use App\Models\Role;

class ReviewService
{
    public function getAllReviews()
    {
        return Review::all();
    }

    public function getReview($id)
    {
        return Review::find($id);
    }
    

    public function createReview(array $data)
    {
        return Review::create($data);
    }
    
    public function updateReview(Review $review, array $data)
    {
        $review->update($data);
        return $review;
    }

    public function deleteReview(Review $review)
    {
        $review->delete();
    }
}