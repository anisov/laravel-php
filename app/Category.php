<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use \AlexeyMezenin\LaravelRussianSlugs\SlugsTrait;
    protected $slugFrom = 'name';
    protected $guarded = ['id'];
}
