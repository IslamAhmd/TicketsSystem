<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsToMany('App\Role');
    }

    public function hasRoles($roles){
        if($this->roles()->whereIn('name', $roles)->first()){
            return true;
        }
    }

    public function hasRole($role){
        if($this->roles()->where('name', $role)->first()){
            return true;
        }
    }

     public function credits(){
        return $this->hasMany('App\Credit');
    }

    public function passengers(){
        return $this->hasMany('App\Passenger');
    }

    public function flights(){
        return $this->belongsToMany('App\Flight');
    }

    public function history(){
        return $this->hasOne('App\History');
    }
}
