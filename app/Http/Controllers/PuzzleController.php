<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuzzleController extends Controller
{
    public function show()
    {
        return view('puzzle');
    }
}
