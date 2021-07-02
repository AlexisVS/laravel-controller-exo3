<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product() {
        $product = (object) [
            "titleA" => "Blended to Perfection",
            "titleB" => "Coffees & Teas",
            "text" => "We take pride in our work, and it shows. Every time you order a beverage from us, we
            guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan
            Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced
            black coffee, you will be coming back for more.",
            "title2A" => "Delicious Treats, Good Eats",
            "title2B" => "Bakery & Kitchen",
            "text2" => "Our seasonal menu features delicious snacks, baked goods, and even full meals
            perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever
            possible, alongside premium vendors for specialty goods.",
            "title3A" => "From Around the World",
            "title3B" => "Bulk Speciality Blends",
            "text3" => "Travelling the world for the very best quality coffee is something take pride in.
            When you visit us, you'll always find new blends from around the world, mainly from regions in
            Central and South America. We sell our blends in smaller to large bulk quantities. Please visit
            us in person for more details.",
            "img1" => 'img/products-01.jpg',
            "img2" => 'img/products-02.jpg',
            "img3" => 'img/products-03.jpg',
        ];
        return view('pages/product', compact('product'));
    }
}
