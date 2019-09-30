<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingItem extends Model
{
    protected $fillable = [
        'name',
        'amount',
        'shop_id',
    ];

    public function shop(){
        return $this->belongsTo('App\Shop');
    }
}
