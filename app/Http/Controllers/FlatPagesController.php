<?php

namespace App\Http\Controllers;

use App\FlatPage;
use Illuminate\Http\Request;

class FlatPagesController extends MainController
{
    public function index($page_url)
    {
        $page = FlatPage::where('url', $page_url)->first();
        if ($page !== null) {
            $this->data['page'] = $page;
            $this->data['similarProducts'] = $this->similarProducts();
            return view("flat", $this->data);
        }
        return redirect('/');
    }
}
