<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $table = 'blogs';
    public $fillable = [
        'image',
        'blog_type',
        'blog_title',
        'blog_description',
        'status',
        'top_blog'
    ];
}
