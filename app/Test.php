<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [ 'date',
                            'description',
                            'dmg',
                            'threat',
                            'risk'
                            ];
}
