<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $fillable = ['fullname', 'phone', 'email', 'question_category_id', 'product_brand_id', 'question'];
    public function question_categories()
    {
        return $this->belongsToMany(QuestionCategory::class);
    }
}
