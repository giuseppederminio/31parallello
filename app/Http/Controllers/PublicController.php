<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\PublicController;


class PublicController extends Controller
{
    public function home () {
        return view('welcome');
    }
    public function index()
    {
        $immagini = File::files(public_path('img'));

        return view('galleria.index', compact('immagini'));
    }
    public function contatti (){
        return view ('contatti');
    }
}
