<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_image',
        'product_name',
        'product_description',
        'stock',
        'id_category',
        'unit_price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
}
