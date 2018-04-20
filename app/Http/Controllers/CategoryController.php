<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends MainController
{
    public function category($slug, Request $request)
    {
        $category = Category::findBySlug($slug);
        $category_id = $category->id;
        $products = Product::where('category_id', $category_id)->paginate(6);
        $categoryName = $category->name;
        if ($products->count() > 0) {
            $randomProduct = $products->random();
        } else {
            $randomProduct = [];
        }
        $this->data['randomProduct'] = $randomProduct;
        $this->data['products'] = $products;
        $this->data['title'] = $categoryName;
        return view('category', $this->data);
    }
}
