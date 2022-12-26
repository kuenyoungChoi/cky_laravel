<?php

namespace App\Models\Payment;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
    ];

//    public function user(){
//        return $this->hasOne(User::class);
//    }

}
