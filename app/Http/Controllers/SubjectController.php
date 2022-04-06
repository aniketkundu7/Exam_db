<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_subject()
    {
        $subject = Subject::get();
        return $subject;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save_subject(Request $request)
    {
        $rules = array(
            'subjectName' => 'required|unique:subjects,subject_name|max:20|min:1'
        );
        $messages = array(
            'subjectName.required' => 'Please enter a subject Name',
            'subjectName.unique' => 'Please enter a unique subject Name'
        );
        $validator =Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return response()->json(['success'=>1,'data'=>$validator->messages()], 200,[],JSON_NUMERIC_CHECK);
        }
        $subject = new Subject();
        $subject -> subject_name = $request -> input('subjectName');

        $subject -> save();

        return response()->json(['success'=>1,'data'=>$subject], 200,[],JSON_NUMERIC_CHECK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update_subject(Request $request)
    {
        $rules = array(
            'subjectName' => 'required|unique:subjects,subject_name|max:20|min:1'
        );
        $messages = array(
            'subjectName.required' => 'Please enter a subject Name',
            'subjectName.unique' => 'Please enter a unique subject Name'
        );
        $validator =Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return response()->json(['success'=>1,'data'=>$validator->messages()], 200,[],JSON_NUMERIC_CHECK);
        }
        $subject = Subject::findOrFail($request->id);
        $subject -> subject_name = $request -> input('subjectName');
        $subject -> update();
        return response()->json(['success'=>1,'data'=>$subject], 200,[],JSON_NUMERIC_CHECK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubjectRequest  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
