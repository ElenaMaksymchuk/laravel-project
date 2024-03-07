<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class QuestionCategory extends Model
{
    use HasFactory;
    protected $table = 'question_categories';
    protected $fillable = ['name'];
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
