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
        $getMainHomeContent = HomePage::where('category', 'home')->first();
        $getServicesContent = HomePage::where('category', 'services')->get();
        $getProducts = HomePage::where('category', 'products')->get();
        $getTestimonials = HomePage::where('category', 'testimonials')->get();
        $getContact = ContactPage::all()->first();
        return view('welcome', compact('getMainHomeContent', 'getServicesContent', 'getProducts', 'getTestimonials', 'getContact'));
    }

    public function about(){
        $getAboutUsContent = AboutPage::where('category', 'who are we')->first();
        $getOurVisionContent = AboutPage::where('category', 'our vision')->first();
        $getAboutOurHair = AboutPage::where('category', 'about our hair')->first();
        $getSalesRep = SalesRepPage::all();
        $getContact = ContactPage::all()->first();
        return view('about', compact('getAboutUsContent', 'getOurVisionContent', 'getAboutOurHair', 'getSalesRep', 'getContact'));
    }

    public function products(){
        $getProducts = ProductPage::all();
        $getContact = ContactPage::all()->first();
        return view('products', compact('getProducts', 'getContact'));
    }

    public function contact(){
        $getContact = ContactPage::all()->first();
        return view('contact', compact('getContact'));
    }
}
