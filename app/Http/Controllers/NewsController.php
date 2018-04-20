<?php

namespace App\Http\Controllers;

use App\News;
use App\Product;
use Illuminate\Http\Request;

class NewsController extends MainController
{

    public function index()
    {
        $news = News::paginate(6);
        $this->data['news'] = $news;
        $this->data['title'] = 'Новости';
        return view('news', $this->data);
    }

    public function artical($slug)
    {
        $this->data['similarProducts'] = $this->similarProducts();
        $artical = News::findBySlug($slug);
        //$artical = News::where('id', $artical_id)->get()->first();
        $this->data['artical'] = $artical;
        $this->data['title'] = 'Новости';
        return view('artical', $this->data);
    }
}
