<?php

namespace App\Http\Controllers\Api\v1\PurOrder;

use App\Http\Controllers\Controller;
use App\Http\Resources\PurOrder\PurOrderResource;
use App\Models\PurOrder\PurOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = PurOrder::all();

        return PurOrderResource::collection($outs);

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
     * @param  \App\Models\PurOrder\PurOrder  $purOrder
     * @return \Illuminate\Http\Response
     */
    public function show(PurOrder $purOrder)
    {
        $purOrder = DB::table('purOrder')->where('name', 'John')->first();

        return $purOrder->email;

        $purOrder = DB::table('purOrder')
            ->select('name', 'email')
            ->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PurOrder\PurOrder  $purOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PurOrder $purOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PurOrder\PurOrder  $purOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurOrder $purOrder)
    {
        //
    }
}
