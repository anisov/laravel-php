<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Faker\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Main extends MainController
{
    public function index()
    {
        $products = Product::paginate(6);
        $this->data['products'] = $products;
        $this->data['title'] = 'Последние товары';
        return view('index', $this->data);
    }

    public function faker()
    {
        $factory = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $category = new \App\Category();
            $category->name = $factory->name();
            $category->description = $factory->text();
            $category->reslug('name');
            $category->save();

            $product = new \App\Product();
            $product->name = $factory->name();
            $product->price = $factory->numberBetween(200, 1000);
            $product->reslug('name');
            $product->photo = 'main.jpg';
            $product->description = $factory->text();
            $product->category_id = $category->id;
            $product->save();
        }
        for ($i = 0; $i < 10; $i++) {
            $news = new \App\News();
            $news->title = $factory->name();
            $news->image = 'main.jpg';
            $news->date = $factory->date();
            $news->shortDesc = $factory->text();
            $news->description = $factory->text();
            $news->reslug('name');
            $news->save();
        }
        echo 'Выполнено';
        die();
    }
}
