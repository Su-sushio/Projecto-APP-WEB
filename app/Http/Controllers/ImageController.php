<?php

namespace App\Http\Controllers;

use App\Image;
use App\Option;
use Illuminate\Http\Eloquent\ModelRequest;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function show(Option $imagen)
    {
        $images = Image::where('option_id', $imagen->id)->get();
        return view('imagens.show')->with('images', $images);
    }

}


