<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $table = 'blog_posts';

    protected $fillable = [
        'title',
        'introduction',
        'content',
        'first_image_url',
        'first_image_caption',
        'second_image_url',
        'second_image_caption',
        'third_image_url',
        'third_image_caption',
    ];



    
}
