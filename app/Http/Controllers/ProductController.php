<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends MainController
{
    public function product($slug, Request $request)
    {
        $product = Product::findBySlug($slug);
        $titleCategory = $product->category->name;
        $products = Product::all();
        if ($products->count() > 0) {
            $randomProduct = $products->random();
        } else {
            $randomProduct = [];
        }
        $this->data['randomProduct'] = $randomProduct;
        $this->data['title'] = $titleCategory;
        $this->data['product'] = $product;
        $this->data['similarProducts'] = $this->similarProducts($product->category_id);
        return view('product', $this->data);
    }

    public function addToCart($product_id)
    {
        $product = Product::find($product_id);
        $id = $product->id;
        $price = $product->price;
        $name = $product->name;
        $date = date("m.d.y");
        $order = [
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'quantity' => 1,
            'attributes' => [
                'date' => $date,]
        ];
        if (auth()->user()) {
            $userId = auth()->user()->id;
            \Cart::session($userId)->add($order);
        } else {
            \Cart::add($order);
        }
        return redirect('/product/' . $product->slug);
    }
}