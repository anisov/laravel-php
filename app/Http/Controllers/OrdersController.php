<?php

namespace App\Http\Controllers;

use App\adminMail;
use Mail;
use App\Order;
use App\Product;
use Response;

class OrdersController extends MainController
{
    const DEFAULT_USER = 1;

    public function index()
    {
        if (auth()->user()) {
            $userId = auth()->user()->id;
            $orders = \Cart::session($userId)->getContent();
            $this->data['totalPrice'] = \Cart::session($userId)->getTotal();
        } else {
            $orders = \Cart::getContent();
            $this->data['totalPrice'] = \Cart::getTotal();
        }
        $this->data['orders'] = $orders;
        $this->data['title'] = 'Мои заказы';
        return view('cart', $this->data);
    }

    public function buy()
    {
        if (auth()->user()) {
            $userId = auth()->user()->id;
        } else {
            $userId = self::DEFAULT_USER;
        }

        if ($userId != 1) {
            $orders = \Cart::session($userId)->getContent();
        } else {
            $orders = \Cart::getContent();
        }

        foreach ($orders as $order) {
            $ord = new Order();
            $ord->product_id = Product::find($order->id)->id;
            $ord->user_id = $userId;
            $ord->save();
        }

        if ($userId!= 1) {
            \Cart::session($userId)->clear();
        } else {
            \Cart::clear();
        }
        $adminMails = adminMail::all();
        foreach ($adminMails as $mail) {
            Mail::send(['text' => 'mail.mail'], ['name'], function ($m) use ($mail) {
                $m->to($mail->email, 'Your Application')->subject('Новый заказ!!');
            });
        }
        return Response::json(['success' => '1']);
    }
}
