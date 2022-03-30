<?php

namespace App\Http\Controllers;

use App\Models\QuestionType;
use App\Http\Requests\StoreQuestionTypeRequest;
use App\Http\Requests\UpdateQuestionTypeRequest;

class QuestionTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreQuestionTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionType  $questionType
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionType $questionType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuestionType  $questionType
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionType $questionType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionTypeRequest  $request
     * @param  \App\Models\QuestionType  $questionType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionTypeRequest $request, QuestionType $questionType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuestionType  $questionType
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionType $questionType)
    {
        //
    }
}
