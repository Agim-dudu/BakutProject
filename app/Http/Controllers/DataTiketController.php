<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTiketController extends Controller
{
    public function show(){
        return view('data_tiket');
    }
}
