<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class TestChild extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('test', function (Builder $builder) {
            $builder->where('string', 'lorem');
        });
    }
}
