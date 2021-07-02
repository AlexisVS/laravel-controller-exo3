<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $home = (object)[
            "titleA" => "Fresh Coffee",
            "titleB" => "Worth Drinking",
            "textA" => "Every cup of our quality artisan coffee starts with locally sourced, hand picked
                ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning
                routine - we guarantee it!",
            "textB" => "Visit Us Today!",
            "title2A" => "Our Promise",
            "title2B" => "To You",
            "text2" => "When you walk into our shop to start your day, we are dedicated to providing you
            with friendly service, a welcoming atmosphere, and above all else, excellent products made with
            the highest quality ingredients. If you are not satisfied, please let us know and we will do
            whatever we can to make things right!",
            
        ];
        return view('home', compact("home"));
    }
}
