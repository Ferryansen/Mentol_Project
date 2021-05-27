<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category', 'name', 'price', 'stock', 'file'
    ];
}