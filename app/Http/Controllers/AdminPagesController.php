<?php

namespace App\Http\Controllers;
use App\Models\HomePage;
use App\Models\AboutPage;
use App\Models\SalesRepPage;
use App\Models\ProductPage;
use App\Models\ContactPage;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    //
    public function admin(){
        $getTotalSalesRep = SalesRepPage::all()->count(); 
        $getHomePageContent = HomePage::all();
        $getProductPageContent = ProductPage::all();
        return view('admin.index', compact('getTotalSalesRep', 'getHomePageContent', 'getProductPageContent'));

    }

    public function indexHome(){
        $getHomePageContent1 = HomePage::all()->first();
        $getHomePageContent = HomePage::orderBy('id', 'desc')->get();
        return view('admin.home.index_homePage', compact('getHomePageContent', 'getHomePageContent1'));
    }

    public function indexAbout(){
        $getAboutPageContent = AboutPage::all();
        return view('admin.about.index_aboutPage', compact('getAboutPageContent'));
    }

    public function indexSalesRep(){
        $getSalesRep = SalesRepPage::all();
        return view('admin.salesRep.index_salesRep', compact('getSalesRep'));
    }

    public function indexProducts(){
        $getProductPageContent = ProductPage::all();
        return view('admin.products.index_products', compact('getProductPageContent'));
    }

    public function indexContact(){
        $getContactPageContent = ContactPage::all();
        return view('admin.contact.index_contact', compact('getContactPageContent'));
    }
}
