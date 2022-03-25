<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function orders()
    {
        return $this->belongsToMany('App\Products')->using('App\OrderProduct');
    }
}


