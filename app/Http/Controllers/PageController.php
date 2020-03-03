<?php

namespace App\Http\Controllers;

use App\Services\PageService;

class PageController extends Controller
{
    private $service;

    public function __construct(PageService $service)
    {
        $this->service = $service;
    }

    public function index(){
        return view('template/main', [
            'content' => 'content/home',
            'text' => $this->service->getPageContent('home'),
        ]);
    }

    public function usluge(){
        return view('template/main', [
            'content' => 'content/uslugeServisaContent',
            'text' => $this->service->getPageContent('uslugeServisaContent')
        ]);
    }
    public function  odrzavanje(){
        return view('template/main', [
            'content' => 'content/odrzavanje',
            'text' => $this->service->getPageContent('odrzavanje')
        ]);
    }
    public function  farbarskiRadovi(){

        return view('template/main', ['content' => 'content/farbanje']);

    }
    public function  zimovnik(){

        return view('template/main', [
            'content' => 'content/zimovnik',
            'text' => $this->service->getPageContent('zimovnik')
        ]);

    }
    public function  slepovanje(){

        return view('template/main', ['content' => 'content/slepovanje']);

    }
    public function  galerija(){

        return view('template/main', ['content' => 'content/galerija']);

    }



}
