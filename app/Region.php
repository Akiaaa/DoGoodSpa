<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    
    protected $fillable = [];

    public function city()
    {
        return $this->hasMany(City::class);
    }
}
