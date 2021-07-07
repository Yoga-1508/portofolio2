<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    protected $guarded = [];
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
