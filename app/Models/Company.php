<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded=[
        'user_id',
        'slug'
    ];

    protected $appends = ['image_url'];

    protected function getImageUrlAttribute()
    {   
        if(str_starts_with($this->image , "uploads") ){
            return $this->image ? asset("storage/$this->image") : "https://placeholder.com/assets/images/150x150-2-500x500.png";
        }
    }

    public function typologies()
    {
        return $this->belongsToMany(Typology::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
