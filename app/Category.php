<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'status', 'url'
    ];

    public function categoriesProducts()
    {
        return $this->belongsToMany(Product::class);
    }
}
