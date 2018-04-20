<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Product;
use App\Category;
use App\News;

class CommonVariableProvider extends ServiceProvider
{
    public $products;
    public $categories;
    public $lastNews;
    public $randomProduct;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->categories = Category::all();
        $this->lastNews = News::latest('id')->limit(3)->get()->reverse();
        $this->products = Product::all();
        if ($this->products->count() > 0) {
            $this->randomProduct = $this->products->random();
        } else {
            $this->randomProduct = [];
        }
        View::share('categories', $this->categories);
        View::share('lastNews', $this->lastNews);
        View::share('randomProduct', $this->randomProduct);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
