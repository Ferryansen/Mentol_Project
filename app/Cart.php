<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'productid', 'name', 'category', 'quantity', 'price', 'file'
    ];
}