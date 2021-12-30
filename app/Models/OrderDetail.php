<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'order_id',
        'name_product',
        'image',
        'price',
        'qty',
        'total_topping',
        'list_topping',
        'note',
    ];
}
