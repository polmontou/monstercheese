<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\ProductOrder;

class Product extends Model
{
    public $timestamps = false;
    protected $primaryKey = "product_id";
    public function scopeSorted(Builder $query, string $column, string $direction): Builder {
        return $query->orderBy($column, $direction);
    }

    protected $fillable = [
        "name",
        "description",
        "price",
        "weight",
        "picture",
        "stock_quantity",
        "category_id",
        "available"
    ];
    
    public function productOrder(): HasMany {
        return $this->hasMany(ProductOrder::class);
    }
}
