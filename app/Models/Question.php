<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function votes() {
        return $this->hasMany(Vote::class, 'question_id', 'id');
    }

    public static function getQuestionOfTheDay(int $dayOfYear) {
        return Question::with('votes')->where('dayOfYear', $dayOfYear)->first();
    }
}