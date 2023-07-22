<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'option',
        'votes'
    ];

    public function questions() {
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }

    public static function saveVote(int $voteId) {
        return Vote::where('id', $voteId)->increment('votes');
    }

    public static function newVote(int $questionId, string $vote) {
        return Vote::create([
            'question_id' => $questionId,
            'option' => $vote,
            'votes' => 1,
        ]);
    }
}