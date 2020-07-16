<?php

namespace App;
use Illuminate\Cache\RetrievesMultipleKeys;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
