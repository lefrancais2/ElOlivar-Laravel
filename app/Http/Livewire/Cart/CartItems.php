<?php

namespace App\Http\Livewire\Cart;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartItems extends Component
{
    public $content;
    public $total_count;
    public $suma;

    //Variables para edicion de cantidad
    public $activar;
    public $quantity;

    public $success_message;

    //protected $listeners = ['updateTable' => 'render'];

    public function mount(){
        $this->activar = false;
    }

    public function render()
    {
        $this->content = Cart::content();
        $this->total_count = Cart::total();
        $this->suma = $this->countPrice();
        return view('livewire.cart.cart-items');
    }

    public function deleteItem($id, $name)
    {
        $rowid = $this->rowID($id);
        Cart::remove($rowid);
        $this->emit('updateCart');
        //$this->emit('updateTable');
        $this->success_message = 'Artículo eliminado de la bandeja de compra';
    }

    private function countPrice()
    {
        $suma = 0;
        $total_content = Cart::content();
        foreach ($total_content as $item) {
            $suma += $item->price * $item->qty;
        }
        return $suma;
    }

    private function rowID($id){
        $rowid = 0;
        foreach (Cart::content() as $item) {
            if($item->id == $id){
                $rowid = $item->rowId;
                break;
            }
        }
        return $rowid;
    }

    /** 
     *  Funcion para editar un articulo
     */
    public function editItem($id){
        $rowid = $this->rowID($id);
        Cart::update($rowid,$this->quantity);
        $this->activar = false;
        $this->emit('updateCart');
    }

    /**
     * Funcion para activar la edicion de cantidad de un articulo
     */
    public function activeEdition(){
        if ($this->activar) {
            $this->activar = false;
        }else{
            $this->activar = true;
        }
    }
}
