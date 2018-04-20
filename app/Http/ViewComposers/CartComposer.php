<?php
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class CartComposer {

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function getTotalOrders(){

        if (auth()->user()){
            $userId = auth()->user()->id;
            $cartCollection = \Cart::session($userId)->getContent();
            return $cartCollection->count();
        }
        $cartCollection = \Cart::getContent();
        return $cartCollection->count();
    }

    public function compose(View $view)
    {
        $view->with('countOrders',$this->getTotalOrders());
    }

}