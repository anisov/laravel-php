<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use \AlexeyMezenin\LaravelRussianSlugs\SlugsTrait;
    protected $slugFrom = 'title';
    protected $guarded = ['id'];
}
