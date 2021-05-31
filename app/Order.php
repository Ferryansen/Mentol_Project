<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'invoice', 'customer', 'address', 'pos', 'total_price'
    ];
}