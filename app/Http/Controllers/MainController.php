<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\News;

interface ParamsController
{
    const  COUNT_NEWS = 3;
    const  LAST_PRODUCTS = 3;
}

class MainController extends Controller
{
    public $products;
    public $categories;
    public $lastNews;
    public $randomProduct;
    public $data;
    public $countOrders;
    protected $user;

    public function __construct()
    {
        $this->getData();
    }

    protected function getData()
    {
        $this->categories = Category::all();
        $this->lastNews = News::latest('id')->limit(3)->get()->reverse();
        $this->products = Product::all();
        if ($this->products->count() > 0) {
            $this->randomProduct = $this->products->random();
        } else {
            $this->randomProduct = [];
        }
        $this->data = [
            'categories' => $this->categories,
            'lastNews' => $this->lastNews,
            'randomProduct' => $this->randomProduct,
        ];
    }

    public function similarProducts($category = null)
    {
        $rand = ParamsController::COUNT_NEWS;
        $similarProducts = Product::all();

        if ($category) {
            $similarProducts = Product::where('category_id', $category)->get();
        }

        if ($similarProducts->count() <= 3) {
            $rand = $similarProducts->count();
        }

        $similarProducts = $similarProducts->random($rand);
        return $similarProducts;
    }
}