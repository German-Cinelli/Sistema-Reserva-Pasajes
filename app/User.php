<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function roles(){
        return $this->belongsToMany('App\Role');
    }

    public function authorizeRoles($roles){
        if($this->hasAnyRole($roles)){
            return true;
        }
        abort(401, 'No está autorizado para llevar a cabo la petición.');
    }

    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach ($roles as $role){
                if($this->hasRole($role)){
                    return true;
                }
            }
        } else {
            if($this->hasRole($roles)){
                return true;
            }
        }
        return false;
    }
    // Validar si un usuario tiene ese rol
    public function hasRole($role){
        if($this->roles()->where('name', $role)->first()){
            return true;
        }
        return false;
    }

    public function tickets(){
        return $this->hasMany('App\Ticket');
    }

    public function travels(){
        return $this->hasMany('App\Ticket');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                            'name',
                            'lastname',
                            'dni',
                            'departament',
                            'location',
                            'address',
                            'number',
                            'apartament',
                            'email',
                            'password',
                            ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
