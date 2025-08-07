<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function products():BelongsToMany
    {
        return $this->belongsToMany(Categorie::class);
    }
}
