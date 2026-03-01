<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'image',
        'category',
        'brand',
        'stock',
        'is_featured',
        'is_new',
    ];  

    protected $casts = [
        'price' => 'decimal:2',
        'is_featured' => 'boolean',
        'is_new' => 'boolean',
    ];

    public function orderItems() : HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getFormatPriceAttribute() : strig
    {
        return 'SGD' . number_format($this->price, 2);
    }
    
}
