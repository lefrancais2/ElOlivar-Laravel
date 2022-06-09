<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ShowPlate extends Component
{
    public $image;
    
    public $plate;

    public $quantity;

    public $success_message;

    public function mount(){
        $this->quantity = 1;
    }

    public function render()
    {
        return view('livewire.show-plate');
    }

    public function addItem(){
        Cart::add([
            'id' => $this->plate->id,
            'name' => $this->plate->name,
            'qty' => $this->quantity,
            'price' => $this->plate->price,
            'weight' => 550,
        ]);

        //$this->resetForm();

        sleep(0.5);

        $this->emit('updateCart');

        $this->success_message = 'Se ha agregado a la bandeja de compra!!';
    }
    
    public function resetForm(){
        $this->quantity = 1;
    }
}
