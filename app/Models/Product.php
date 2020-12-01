<?php

namespace App\Models;

use App\Scoping\Scoper;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeWithScopes(Builder $builder, $scopes = [])
    {
        return (new Scoper(request()))->apply($builder, $scopes);
    }

    public function categories()
    {
        return $this->BelongsToMany(Category::class);
    }
}
