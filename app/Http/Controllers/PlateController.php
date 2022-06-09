<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Plate;
use Illuminate\Http\Request;

class PlateController extends Controller
{
    public function show(Plate $plate){
        $image = Image::where('imageable_id',$plate->id)->get();
        return view('plates.show',compact('plate','image'));
    }
}
