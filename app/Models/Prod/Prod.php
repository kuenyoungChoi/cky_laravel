<?php

namespace App\Models\Prod;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prod extends Model
{
    protected $fillable = [
        'title'
    ];

    use HasFactory;
}
