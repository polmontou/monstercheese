<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Product;
use App\Models\User;

class Order extends Model
{
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $fillable = [
        "user_id"
    ];
    
    public function products(): BelongsToMany 
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
    public function user(): BelongsTo  
    {
        return $this->belongsTo(User::class);
    }
}
