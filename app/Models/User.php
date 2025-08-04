<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'lastname',
        'firstname',
        'email',
        'phone_number'
    ];

    public function carts(): HasOne
    {
        return $this->hasOne(Cart::class);
    }
}
