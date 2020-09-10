<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class TestParent extends Model
{
    protected $withCount = [
        'testChildren',
    ];

    public function scopeTest($query)
    {
        return $query->whereHas('testChildren', function ($query) {
                $query->where('updated_at', '>=', '1900-01-01 00:00:00');
            });
    }

    public function testChildren()
    {
        return $this->hasMany('App\TestChild');
    }
}
