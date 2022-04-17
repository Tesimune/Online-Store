<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'cost_price', 'price', 'category_id',
        'description', 'quantity', 'discount', 'thumbnail'
    ];
    use HasFactory;
}
