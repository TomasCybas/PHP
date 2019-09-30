<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'name',
        'address',
    ];

    public function items(){
        return $this->hasMany('App\ShoppingItem');
    }
}
