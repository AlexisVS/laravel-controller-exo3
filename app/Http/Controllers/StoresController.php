<?php

namespace App\Http\Controllers;

use App\Models\Stores;
use Illuminate\Http\Request;

class StoresController extends Controller
{
    public function store() {
        $stores = Stores::all();
        return view('pages/store', compact("stores"));
    }
}
