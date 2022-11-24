<?php

namespace App\Http\Controllers\Api\v1\Quest;

use App\Http\Controllers\Controller;
use App\Models\Quest\Quest;
use Illuminate\Http\Request;

class QuestsController extends Controller
{
    public function index2()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Quest::with(['player'=> function($q) {$q->with('clients');}]) -> get();
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
     * @param  \App\Models\Quest\Quest  $quest
     * @return \Illuminate\Http\Response
     */
    public function show(Quest $quest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quest\Quest  $quest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quest $quest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quest\Quest  $quest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quest $quest)
    {
        //
    }
}
