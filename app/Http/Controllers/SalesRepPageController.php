<?php

namespace App\Http\Controllers;

use App\Models\SalesRepPage;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class SalesRepPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.pages.pages_salesRep');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $salesRep = new SalesRepPage;
        $salesRep->name = $request->input('name');
        $salesRep->email = $request->input('email');
        $salesRep->image = $request->input('image');

        if($request->hasFile('image')){
            $image = $request->file('image');
            $salesRepImage = $salesRep->category.'_image'.time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save( public_path('/images/sales_rep/' . $salesRepImage ) );
            $salesRep->image = $salesRepImage;
        };

        //dd($salesRep);
        $salesRep->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SalesRepPage  $salesRepPage
     * @return \Illuminate\Http\Response
     */
    public function show(SalesRepPage $salesRepPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SalesRepPage  $salesRepPage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $getId = SalesRepPage::findOrFail($id);
        return view('admin.edit.edit_salesRep', compact('getId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SalesRepPage  $salesRepPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $getId = SalesRepPage::findOrFail($id);
        $getId->name = $request->input('name');
        $getId->image = $request->input('image');
        $getId->email = $request->input('email');
        $getId->phone = $request->input('phone');
        $getId->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SalesRepPage  $salesRepPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalesRepPage $salesRepPage)
    {
        //
    }
}
