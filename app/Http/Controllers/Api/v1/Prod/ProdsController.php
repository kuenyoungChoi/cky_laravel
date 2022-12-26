<?php

namespace App\Http\Controllers\Api\v1\Prod;

use App\Http\Controllers\Controller;
use App\Http\Resources\Prod\ProdResource;
use App\Models\Prod\Prod;
use Illuminate\Http\Request;

class ProdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = Prod::all();

        return ProdResource::collection($outs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prod\Prod  $prod
     * @return \Illuminate\Http\Response
     */
    public function show(Prod $prod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prod\Prod  $prod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prod $prod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prod\Prod  $prod
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prod $prod)
    {
        //
    }
}
