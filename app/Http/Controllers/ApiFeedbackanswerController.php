<?php

namespace App\Http\Controllers;

use App\Feedbackanswer;
use Illuminate\Http\Request;

class ApiFeedbackanswerController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Feedbackanswer $feedbackanswer
     * @return \Illuminate\Http\Response
     */
    public function show(Feedbackanswer $feedbackanswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Feedbackanswer $feedbackanswer
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedbackanswer $feedbackanswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Feedbackanswer $feedbackanswer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedbackanswer $feedbackanswer)
    {
        $feedbackanswer->answer = $request->feedbackanswer['answer'];
        $feedbackanswer->justification = $request->feedbackanswer['justification'];
        $feedbackanswer->save();
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Feedbackanswer $feedbackanswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedbackanswer $feedbackanswer)
    {
        //
    }
}
