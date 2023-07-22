<?php

use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\VotesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/voter', 301);

Route::prefix('voter')->group(function () {
    // Display the question page
    Route::get('/', [QuestionsController::class, 'index'])->name('home');

    // Route for the voting
    Route::post('/vote/{id}', [VotesController::class, 'update'])->name('vote');

    // Route for new votes (ide muszáj lesz a GET mert POST-al nem lehet átirányítani - kivéve ha eszembe jut valami jobb megoldás -) 
    Route::get('/new/{questionId}/{vote}', [VotesController::class, 'store'])->name('new_vote');
});