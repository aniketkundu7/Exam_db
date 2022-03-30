<?php

namespace App\Http\Controllers;

use App\Models\QuestionLevel;
use App\Http\Requests\StoreQuestionLevelRequest;
use App\Http\Requests\UpdateQuestionLevelRequest;

class QuestionLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionLevelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionLevelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionLevel  $questionLevel
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionLevel $questionLevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuestionLevel  $questionLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionLevel $questionLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionLevelRequest  $request
     * @param  \App\Models\QuestionLevel  $questionLevel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionLevelRequest $request, QuestionLevel $questionLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuestionLevel  $questionLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionLevel $questionLevel)
    {
        //
    }
}
