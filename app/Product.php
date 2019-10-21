<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'descripction', 'rank', 'status', 'category_id'
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function productsCategories()
    {
        return $this->belongsToMany(Category::class);
    }
}
