<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = 
    [   // Colums name
        'products_img',
        'products_title',
        'products_decrption',
        'products_discount',
        'products_price',
        'products_department'
    ];
}