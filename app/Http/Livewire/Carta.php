<?php

namespace App\Http\Livewire;

use App\Models\Image;
use App\Models\Plate;
use Livewire\Component;

use Gloudemans\Shoppingcart\Cart;

class Carta extends Component
{

    //public $datas; 

    //public $images;

    public $option_select;

    //protected $queryString = ['datas','images'];

    public function render()
    {
        $datas = Plate::where('type', $this->option_select)->get();
        $images = Image::select('url', 'imageable_id')->get();

        return view('livewire.carta', compact('datas', 'images'));
    }
}
