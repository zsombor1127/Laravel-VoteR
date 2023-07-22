<?php

namespace App\Http\Controllers;

use App\Models\Question;

class QuestionsController extends Controller
{
    public $dayOfYear;

    public function __construct() {
        $this->dayOfYear = now()->format('z');
    }

    public function index() {
        // Get question of the day
        $question = Question::getQuestionOfTheDay($this->dayOfYear);
        $dayOfYear = $this->dayOfYear;

        return view('voter.question.index', compact('question', 'dayOfYear'));
    }
}