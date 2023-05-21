<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function show1()
    {
        return view('fasilitas1');
    }
    public function show2()
    {
        return view('fasilitas2');
    }
    public function show3()
    {
        return view('fasilitas3');
    }
    public function show4()
    {
        return view('fasilitas4');
    }
}
