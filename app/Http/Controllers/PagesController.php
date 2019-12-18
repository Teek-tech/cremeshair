<?php

namespace App\Http\Controllers;
use App\Models\HomePage;
use App\Models\AboutPage;
use App\Models\SalesRepPage;
use App\Models\ProductPage;
use App\Models\ContactPage;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        $getHomePageContent = HomePage::all();//where('category', '=', 'home')->get();
        return view('welcome', compact('getHomePageContent'));
    }

    public function about(){
        return view('about');
    }

    public function products(){
        return view('products');
    }

    public function contact(){
        return view('contact');
    }
}
