<?php

namespace App\Http\Controllers;

use App\Models\QuestionLevel;
use App\Http\Requests\StoreQuestionLevelRequest;
use App\Http\Requests\UpdateQuestionLevelRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_question_level()
    {
        $questionlevel=QuestionLevel::get();
        return $questionlevel;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save_question_level(Request $request)
    {
        $rules = array(
         'levelName' => 'required|max:20'
        );
         $messages =  array(
        'levelName.required' => 'Please enter a level name',
        'levelName.unique' => 'Please enter a unique level name'
            

        );
        $validator =Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
        return response()->json(['success'=>1,'data'=>$validator->messages()], 200,[],JSON_NUMERIC_CHECK);
        }
        $questionlevel = new QuestionLevel();
        $questionlevel->level_name = $request->input('levelName');
        $questionlevel->update();
        return response()->json(['success'=>1,'data'=>$questionlevel], 200,[],JSON_NUMERIC_CHECK);
 
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
    public function update_question_level(Request $request, QuestionLevel $questionLevel)
    {
        $rules = array(
        'levelName' => 'required|max:30'
        );
        $messages = array(
       'levelName.required' => 'Please enter a proper level name',
        );
        $validator =Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
        return response()->json(['success'=>1,'data'=>$validator->messages()], 200,[],JSON_NUMERIC_CHECK);
        }
        $questionLevel = QuestionLevel::findOrFail ($request->id);
        $questionLevel -> level_name = $request ->input('questionLevelName');
        $questionLevel -> update();
        //return $questionLevel;
        return response()->json(['success'=>1,'data'=>$questionLevel],200,[],JSON_NUMERIC_CHECK);
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
