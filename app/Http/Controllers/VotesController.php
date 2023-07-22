<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\Question;
use Illuminate\Http\Request;

class VotesController extends Controller
{
    private $dayOfYear;

    public function __construct() {
        $this->dayOfYear = now()->format('z');
    }

    public function store(Request $request)
    {
        $request->merge([
            'questionId' => $request->route('questionId'),
            'vote' => $request->route('vote')
        ]);

        $request->validate([
            'vote' => 'required|string|min:1|max:32', 
            'questionId' => 'required|numeric'
        ]);

        $questionData = Question::getQuestionOfTheDay($this->dayOfYear);

        if($questionData->id != $request->questionId) {
            return back()->withErrors(['invalid_vote' => 'Vote invalid!']);
        }

        Vote::newVote($request->questionId, $request->vote);
        return back()->withErrors(['vote_success' => 'Success!']);

    }

    public function update(Request $request, int $questionId)
    {
        // If new vote option available
        if($request->new_vote) {
            return redirect()->route('new_vote', ['questionId' => $questionId, 'vote' => $request->new_vote]);
        }


        // Validate the request parameters
        $request->validate([
            'vote' => 'required|numeric'
        ]);

        // Check data validity
        $questionData = Question::getQuestionOfTheDay($this->dayOfYear);

        if($questionData->id !== $questionId || !$questionData->votes->contains('id', $request->vote)) {
            return back()->withErrors(['invalid_vote' => 'Vote invalid!!']);
        }

        Vote::saveVote($request->vote);

        return back()->withErrors(['vote_success' => 'Success!']);
    }
}
