<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Topping extends Model
{
    use HasFactory;
    protected $table = "product_toppings";
    protected $fillable = [
        'product_id',
        'topping_id'
    ];
}
