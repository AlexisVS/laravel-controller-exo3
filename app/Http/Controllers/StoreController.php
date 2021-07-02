<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store() {
        $store = (object)[
            "titleA" => "Come On In",
            "titleB" => "We're Open",
            "ul1li1" => "Sunday",
            "ul1li1A" => "Closed",
            "ul1li2" => "Monday",
            "ul1li2A" => "7:00 AM to 8:00 PM",
            "ul1li3" => "Tuesday",
            "ul1li3A" => "7:00 AM to 8:00 PM",
            "ul1li4" => "Wednesday",
            "ul1li4A" => "7:00 AM to 8:00 PM",
            "ul1li5" => "Thursday",
            "ul1li5A" => "7:00 AM to 8:00 PM",
            "ul1li6" => "Friday",
            "ul1li6A" => "7:00 AM to 8:00 PM",
            "ul1li7" => "Saturday",
            "ul1li7A" => "9:00 AM to 5:00 PM",
            "adressA" => "1116 Orchard Street",
            "adressB" => "Golden Valley, Minnesota",
            "numA" => "Call Anytime",
            "numB" => "(317) 585-8468",
            "title2A" => "Strong Coffee, Strong Roots",
            "title2B" => "About Our Cafe",
            "text2A" => "Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee
            sourced from
            artisan farmers in various regions of South and Central America. We are dedicated to
            travelling the world,
            finding the best coffee, and bringing back to you here in our cafe.",
            "text3A" => "We guarantee that you will fall in",
            "text3em" => "lust",
            "text3B" => "with our decadent blends the moment you walk inside until you finish your last sip. Join us
            for your daily
            routine, an outing with friends, or simply just to enjoy some alone time.",
            "img" => 'img/about.jpg',
        ];
        return view('pages/store', compact("store"));
    }
}
