<?php

namespace App\Http\Controllers\Api\v1\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\Player\PlayerResource;
use App\Http\Resources\User\UserResource;
use App\Models\Payment\Payment;
use App\Models\Player\Player;
use App\Models\User\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $outs = User::all();

        return UserResource::collection($outs);
    }

    public function getpayments()
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
        $outs = User::create([
            'name'=>$request->name
        ]);

        return new UserResource($outs);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $outs = $user->update([
            'name'=>$request->name
        ]);

        return json_encode($outs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $outs = $user->delete();

        return json_decode($outs);
    }
}
