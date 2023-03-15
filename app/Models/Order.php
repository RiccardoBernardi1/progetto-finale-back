<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function products(){
        return $this->belongsToMany('App\Models\Product', 'order_product', 'order_id', 'product_id')->withPivot('quantity');

    }
}
