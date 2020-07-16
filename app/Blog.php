<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function manufacturer()
    {
    return $this->belongsTo(Manufacturer::class);
    }
}
