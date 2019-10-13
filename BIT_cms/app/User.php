<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password', 'type', 'phone_number',
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

    public function groups(){
        return $this->belongsToMany('App\Group', 'group_users');
    }

    public function taughtGroups(){
        return $this->hasMany('App\Group', 'teacher_id' );
    }

    public function sentMessages(){
        return $this->hasMany('App\Message', 'user_id');
    }

    public function isAdmin(){
        if($this->type == 1){
            return true;
        } else{
            return false;
        }
    }
}