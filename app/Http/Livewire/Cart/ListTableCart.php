<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

use Gloudemans\Shoppingcart\Facades\Cart;

class ListTableCart extends Component
{
    public $content;
    public $total_count;
    public $suma;

    //protected $listeners = ['updateTable' => 'render'];

    public function render()
    {
        $this->content = Cart::content();
        $this->total_count = Cart::total();
        $this->suma = $this->countPrice();
        return view('livewire.cart.list-table-cart');
    }

    //"addTodo({{ $todo->id }}, '{{ $todo->name }}')"
    /*
    public function deleteItem($id, $name)
    {
        $rowid = $this->rowID($id);
        Cart::remove($rowid);
        $this->emit('updateCart');
        $this->emit('updateTable');
    }*/

    private function countPrice()
    {
        $suma = 0;
        $total_content = Cart::content();
        foreach ($total_content as $item) {
            $suma += $item->price * $item->qty;
        }
        return $suma;
    }

    /*
    private function rowID($id)
    {
        $rowid = 0;
        foreach (Cart::content() as $item) {
            if ($item->id == $id) {
                $rowid = $item->rowId;
            }
        }
        return $rowid;
    }
    */
}
