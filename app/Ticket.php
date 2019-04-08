<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function travels(){
        return $this->belongsTo('App\Travel');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }
}
