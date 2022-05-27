<?php

use Illuminate\Http\Request;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\QuestionLevelController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(array('prefix' => 'dev'), function() {
    Route::get("getSubjects", [SubjectController::class,'get_subject']);
    Route::post("saveSubject", [SubjectController::class,'save_subject']);
    Route::patch("updateSubject", [SubjectController::class,'update_subject']);

    Route::get("questionLevel", [QuestionLevelController::class,'get_question_level']);
    Route::post("questionLevel", [QuestionLevelController::class,'save_question_level']);
    Route::patch("questionLevel", [QuestionLevelController::class,'update_question_level']);

    
});
