<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price'
    ];
    
    // public function roles()
    // {
    //     return $this->belongsToMany('App\Order');
    // }

    public function orderProducts()
   {
     return$this->hasMany(OrderProduct::class);
    }

}
