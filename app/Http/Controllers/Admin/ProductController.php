<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

require_once 'changeSaveImage.php';

class ProductController extends Controller
{
    const UPLOAD_DIR = 'products';

    public function index()
    {
        $products = Product::all();
        $data['products'] = $products;
        return view('admin\products', $data);
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'photo' => 'image|mimes:jpeg,jpg,png',
            'description' => 'required',
            'category' => ['required',
                function ($attribute, $value, $fail) {
                    if (!Category::find($value)) {
                        return $fail('Такой категории не существует');
                    }
                },
            ],
        ]);
        $product = new Product();
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->reslug('name');
        $maxId = Product::all()->max('id') + 1;
        $photoName = md5($maxId);
        if ($request->file('photo')) {
            $product->photo = changeSaveImage($request->file('photo'), $photoName, self::UPLOAD_DIR);
        }
        $product->description = $request->get('description');
        $product->category_id = $request->get('category');
        $product->save();
        return redirect('/admin/products/');
    }

    public function create(Request $request)
    {
        return view('/admin/create-product');
    }

    public function edit($product_id, Request $request)
    {
        $product = Product::where('id', $product_id)->get()->first();
        $data['product'] = $product;
        return view('/admin\product', $data);
    }

    public function update($product_id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'photo' => 'image|mimes:jpeg,jpg,png',
            'description' => 'required',
            'category' => 'required',
        ]);

        $product = Product::find($product_id);
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->reslug('name');
        if ($request->file('photo')) {
            $product->photo = changeSaveImage($request->file('photo'), rand(1, 10000), self::UPLOAD_DIR);
        }
        $product->description = $request->get('description');
        $product->category_id = $request->get('category');
        $product->save();
        return redirect('/admin/products/');
    }

    public function delete($product_id, Request $request)
    {
        Product::destroy($product_id);
        return redirect('/admin/products');
    }
}
