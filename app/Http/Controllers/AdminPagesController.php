<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    //
    public function admin(){
        return view('admin.index');
    }

    public function pagesHome(){
        return view('admin.pages_home');
    }

    public function pagesAbout(){
        return view('admin.pages_about');
    }

    public function pagesProducts(){
        return view('admin.pages_products');
    }

    public function pagesContact(){
        return view('admin.pages_contact');
    }

    public function adminProducts(){
        return view('admin.admin_products');
    }

    public function salesRep(){
        return view('admin.sales_rep');
    }
}
