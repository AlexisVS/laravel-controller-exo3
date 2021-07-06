<?php

namespace App\Http\Controllers;

use App\Models\Homes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $homes = Homes::all();
        return view('home', compact("homes"));
    }
}
