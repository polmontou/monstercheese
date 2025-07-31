<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Product;
use App\Models\Order;

class ProductOrder extends Model
{
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity'
    ];
    // public function product(): belongsTo {
    //     return $this->belongsTo(Product::class);     
    // }
    // public function order(): BelongsTo {
    //     return $this->belongsTo(Order::class);

    // }
}