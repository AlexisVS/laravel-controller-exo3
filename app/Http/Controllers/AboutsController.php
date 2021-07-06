<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abouts;

class AboutsController extends Controller
{
    public function about() {
        $abouts = Abouts::all();
        return view('pages.about', compact('abouts'));
    }
}
