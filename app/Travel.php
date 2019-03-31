<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = [ 'origin',
                            'destination',
                            'datetime',
                            'price'
                            ];


    public function tickets(){
        return $this->hasMany('App\Ticket');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }
        /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
