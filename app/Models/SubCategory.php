<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'subcategoryName',
        'category_id',
        'slug',
        'text_desc',
        'status',
        'image'
    ];
}
