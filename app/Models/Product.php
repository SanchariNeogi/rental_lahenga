<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = 'products';
    public $fillable = [
        'product_slug',
        'product_thumbnail',
        'product_name',
        'product_price',
        'days3rental',
        'days5rental',
        'days7rental',
        'size_s',
        'siz_xs',
        'size_xxs',
        'size_m',
        'size_l',
        'size_xl',
        'size_xxl',
        'size_xxxl',
        'product_descriptions',
        'size_chart',
        'status'
    ];
}
