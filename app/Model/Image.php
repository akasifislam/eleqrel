<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = ['id'];


    public function imageable()
    {
        return $this->morphTo();
    }
}
