<?php

namespace App\Scoping\Scopes;

use Illuminate\Database\Eloquent\Builder;


class CategoryScope
{
    public function apply(Builder $builder, $value)
    {
        return $builder->whereHas('categories', function ($builder) use ($value) {
            $builder->where('slug', $value);
        });
    }
}
