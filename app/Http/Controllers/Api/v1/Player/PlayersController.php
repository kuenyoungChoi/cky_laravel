<?php

namespace App\Http\Controllers\Api\v1\Player;

use App\Http\Controllers\Controller;
use App\Http\Resources\Player\PlayerResource;
use App\Models\Player\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = Player::all();

        return PlayerResource::collection($outs);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $outs = Player::create([
            'title' => $request->title
        ]);

        return new PlayerResource($outs);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        $player->load('quests');

        return new PlayerResource($player);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        $outs = $player->update([
            'title' => $request->title
        ]);

        return json_encode($outs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $outs = $player->delete();

        return json_encode($outs);
    }
}
