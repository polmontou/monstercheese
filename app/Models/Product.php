<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'name',
        'description',
        'price',
        'weight',
        'picture',
        'stock_quantity',
        'category',
        'available'];
}
