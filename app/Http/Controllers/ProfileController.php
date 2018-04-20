<?php

namespace App\Http\Controllers;

class ProfileController extends MainController
{
    public function index()
    {
        return view('auth.profile', $this->data);
    }
}
