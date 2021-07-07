<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
