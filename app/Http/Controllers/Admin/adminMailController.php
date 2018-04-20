<?php

namespace App\Http\Controllers\admin;

use App\adminMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adminMailController extends Controller
{
    public function index()
    {
        $mails = adminMail::all();
        $data['mails'] = $mails;
        return view('admin\mails', $data);
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
        ]);
        $mail = new adminMail();
        $mail->email = $request->get('email');
        $mail->save();
        return redirect('admin/mails/');
    }

    public function create(Request $request)
    {
        return view('admin\mail');
    }

    public function delete($mail_id, Request $request)
    {
        adminMail::destroy($mail_id);
        return redirect('admin/mails');
    }

}

    
