<?php

namespace App\Http\Controllers;

use App\Models\ProductPage;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ProductPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.pages.pages_products');
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
        $product = new ProductPage;
        $product->name = $request->input('name');
        $product->color = $request->input('color');
        $product->size = $request->input('size');
        $product->weight = $request->input('weight');
        $product->length = $request->input('length');

        if($request->hasFile('image')){
            $image = $request->file('image');
            $productImage = $product->category.'_image'.time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save( public_path('/images/products/' . $productImage ) );
            $product->image = $productImage;
        };

        // dd($product);
        $product->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductPage  $productPage
     * @return \Illuminate\Http\Response
     */
    public function show(ProductPage $productPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductPage  $productPage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $getId = ProductPage::findOrFail($id);
        return view('admin.edit.edit_products', compact('getId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductPage  $productPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $getId = ProductPage::findOrFail($id);
        $getId->image = $request->input('image');
        $getId->name = $request->input('name');
        $getId->color = $request->input('color');
        $getId->size = $request->input('size');
        $getId->weight = $request->input('weight');
        $getId->length = $request->input('length');
        $getId->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductPage  $productPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductPage $productPage)
    {
        //
    }
}
