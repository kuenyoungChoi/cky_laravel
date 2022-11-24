<?php

namespace App\Models\User;

use App\Models\Payment\Payment;
use App\Models\PurOrder\PurOrder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

}
