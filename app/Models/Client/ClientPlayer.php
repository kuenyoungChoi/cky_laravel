<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientPlayer extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'player_id'

    ];

    protected $table='client_player';
}
