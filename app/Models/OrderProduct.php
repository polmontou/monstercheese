<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Product;
use App\Models\Order;

class OrderProduct extends Model
{
    protected $table = "order_product";
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity'
    ];

}