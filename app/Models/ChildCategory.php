<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'childcategoryName',
        'slug',
        'category_id',
        'subcategory_id',
        'text_desc',
        'status',
        'image'
    ];
}
