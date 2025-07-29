<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
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
        "category",
        "available"
    ];
}
