<?php


namespace App\Http\Controllers;


use Illuminate\View\View;

class PageController extends Controller
{
    public function index(){
        return view('template/main', ['content' => 'content/home']);
    }

    public function usluge(){

        return view('template/main', ['content' => 'content/uslugeServisaContent']);
    }
    public function  odrzavanje(){

        return view('template/main', ['content' => 'content/odrzavanje']);

    }
    public function  farbarskiRadovi(){

        return view('template/main', ['content' => 'content/farbanje']);

    }
    public function  zimovnik(){

        return view('template/main', ['content' => 'content/zimovnik']);

    }
    public function  slepovanje(){

        return view('template/main', ['content' => 'content/slepovanje']);

    }
    public function  galerija(){

        return view('template/main', ['content' => 'content/galerija']);

    }



}
