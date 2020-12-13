<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Offers;
use App\Models\Products;
use App\Models\Sliders;
use App\Models\Suggestions;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $products = Products::all();
        $sliders = Sliders::all();
        $offers = Offers::all();
        $suggestions = Suggestions::all();
        $images = Images::all();

        return view('welcome')->with('products', $products)->with('sliders', $sliders)->with('offers', $offers)->with('suggestions', $suggestions)->with('images', $images);
    }
}
