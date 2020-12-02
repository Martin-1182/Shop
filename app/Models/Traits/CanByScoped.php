<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;
use App\Scoping\Scoper;

trait CanByScoped
{
    public function scopeWithScopes(Builder $builder, $scopes = [])
    {
        return (new Scoper(request()))->apply($builder, $scopes);
    }
}
