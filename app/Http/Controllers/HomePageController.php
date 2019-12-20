<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.pages.home-page');
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
        $content = new HomePage;
        $content->title = $request->input('title');
        $content->description = $request->input('description');
        $content->category = $request->input('category');
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $contentImage = $content->category.'_image'.time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save( public_path('/images/home_page/' . $contentImage ) );
            $content->image = $contentImage;
        };

        $content->rank = $request->input('rank');
        //dd($content);
        $content->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function show(HomePage $homePage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $getId = HomePage::findOrFail($id);
        return view('admin.edit.edit_home', compact('getId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $getId = HomePage::findOrFail($id);
        $getId->title = $request->input('title');
        $getId->description = $request->input('description');
        $getId->category = $request->input('category');
        $getId->image = $request->input('image');
        $getId->rank = $request->input('rank');
        $getId->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePage $homePage)
    {
        //
    }
}
