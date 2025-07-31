<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Order;

class Product extends Model
{
    public $timestamps = false;
    protected $primaryKey = "id";
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
    
    public function orders(): BelongsToMany 
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }
}
