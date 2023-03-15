<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        "company_id",
        "slug"
    ];

    protected $appends = ['image_url'];

    protected function getImageUrlAttribute()
    {   
        if(str_starts_with($this->image , "uploads") ){
            return $this->image ? asset("storage/$this->image") : "https://placeholder.com/assets/images/150x150-2-500x500.png";
        }
    }

    public function orders(){
        return $this->belongsToMany('App\Models\Order', 'order_product', 'product_id', 'order_id' )->withPivot('quantity');
    }
    
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
