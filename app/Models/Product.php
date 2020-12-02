<?php

namespace App\Models;


use App\Models\Category;
use App\Models\ProductVariation;
use App\Models\Traits\CanByScoped;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, CanByScoped;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function categories()
    {
        return $this->BelongsToMany(Category::class);
    }

    public function variations()
    {
        return $this->hasMany(ProductVariation::class)->orderBy('order', 'asc');
    }
}
