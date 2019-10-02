<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function students(){
        return $this->belongsToMany('App\User', 'group_users');
    }

    public function course(){
        return $this->belongsTo('App\Course');
    }

    public function lectures(){
        return $this->hasMany('App\Lecture');
    }
}
