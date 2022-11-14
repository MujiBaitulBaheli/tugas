<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('homee');
    }
    public function about($berapa) {
        echo 'lina ' . $berapa;
    }

    public function penerbit(){
        return view('pt');
    }
}
