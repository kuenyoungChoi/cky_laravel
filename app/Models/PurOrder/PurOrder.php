<?php

namespace App\Models\PurOrder;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PurOrder extends Model
{
    protected $fillable = [
        'user_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    use HasFactory;
}
