<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $data['categories'] = $category;
        return view('admin\categories', $data);
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        $category = new Category();
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->reslug('name');
        $category->save();
        return redirect('/admin/categories/');
    }

    public function create(Request $request)
    {
        return view('admin\create-category');
    }

    public function edit($category_id, Request $request)
    {
        $category = Category::where('id', $category_id)->get()->first();
        $data['category'] = $category;
        return view('admin\category', $data);
    }

    public function update($category_id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        $category = Category::find($category_id);
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->save();
        $data['category'] = $category;
        return redirect('/admin/categories');
    }

    public function delete($category_id, Request $request)
    {
        Category::destroy($category_id);
        return redirect('/admin/categories');
    }
}
