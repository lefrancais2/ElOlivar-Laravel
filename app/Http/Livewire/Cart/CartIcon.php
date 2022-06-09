<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartIcon extends Component
{
        
    public $count;

    protected $listeners = [
        'updateCart' => 'render',
    ];

    public function mount(){
        $this->count = 0;
    }

    public function render()
    {
        $this->count = Cart::count();    
        return view('livewire.cart.cart-icon');
    }
}
