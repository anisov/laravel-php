<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use \AlexeyMezenin\LaravelRussianSlugs\SlugsTrait;
    protected $slugFrom = 'name';
    protected $guarded = ['id'];

    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }
}
