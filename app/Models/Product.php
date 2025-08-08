<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function categories():BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'id_categorie','id');
    }
}
