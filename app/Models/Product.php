<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    'name', 'description', 'price', 'weight',
    'stock_quantity', 'category', 'available'
];

public function category(){
    return $this->belongsTo(Category::class);
}

public function orderProducts(){
    return $this->hasMany(OrderProduct::class);
}

public function cart(){
    return $this->belongsToMany(Cart::class)->withPivot('quantity');
}
public function order(){
    return $this->belongsToMany(Order::class)->withPivot('quantity');
}

}
