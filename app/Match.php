<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{


    // get name seasons via id
    public function season()
    {
        return $this->belongsTo('App\Season');
    }

}
