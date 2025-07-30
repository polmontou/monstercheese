<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    public $timestamps = false;
    protected $primaryKey = "order_id";
    
    public function productOrder(): HasMany {
        return $this->hasMany(ProductOrder::class);
    }
}
