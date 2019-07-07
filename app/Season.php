<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = ['name', 'year'];
    public function match(){
        return $this->hasOne('App\Match');
    }
}
