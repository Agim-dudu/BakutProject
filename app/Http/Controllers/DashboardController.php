<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Florafauna;


class DashboardController extends Controller
{
    public function index()
    {
        $puzzles = Florafauna::all();

        return view('index', compact('puzzles'));
    }
    
}
