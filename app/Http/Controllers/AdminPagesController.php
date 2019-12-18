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
        $getHomePageContent = HomePage::all();
        $getProductPageContent = ProductPage::all();
        return view('admin.index', compact('getHomePageContent', 'getProductPageContent'));

    }

    public function pagesHome(){
        return view('admin.pages.pages_home');
    }

    public function pagesAbout(){
        return view('admin.pages.pages_about');
    }

    public function pagesSalesRep(){
        return view('admin.pages.pages_salesRep');
    }

    public function pagesProducts(){
        return view('admin.pages.pages_products');
    }

    public function pagesContact(){
        return view('admin.pages.pages_contact');
    }

    public function adminProducts(){
        $getProductPageContent = ProductPage::all();
        return view('admin.admin_products', compact('getProductPageContent'));
    }

    public function salesRep(){
        $getSalesRep = SalesRepPage::all();
        return view('admin.sales_rep', compact('getSalesRep'));
    }

    public function uploadsHome(){
        $getHomePageContent = HomePage::all();
        return view('admin.uploads.uploads_homePage', compact('getHomePageContent'));
    }

    public function uploadsAbout(){
        $getAboutPageContent = AboutPage::all();
        return view('admin.uploads.uploads_aboutPage', compact('getAboutPageContent'));
    }

    public function uploadsSalesRep(){
        $getSalesRep = SalesRepPage::all();
        return view('admin.uploads.uploads_salesRep', compact('getSalesRep'));
    }

    public function uploadsProducts(){
        $getProductPageContent = ProductPage::all();
        return view('admin.uploads.uploads_productsPage', compact('getProductPageContent'));
    }

    public function uploadsContact(){
        $getContactPageContent = ContactPage::all();
        return view('admin.uploads.uploads_contactPage', compact('getContactPageContent'));
    }
}
