<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class AboutPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.pages.pages_about');

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
        $content = new AboutPage;
        $content->title = $request->input('title');
        $content->description = $request->input('description');
        $content->category = $request->input('category');

        if($request->hasFile('image')){
            $image = $request->file('image');
            $contentImage = $content->category.'_image'.time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save( public_path('/images/about_page/' . $contentImage ) );
            $content->image = $contentImage;
        };

        //dd($content);
        $content->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutPage  $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function show(AboutPage $aboutPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutPage  $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $getId = AboutPage::findOrFail($id);
        return view('admin.edit.edit_about', compact('getId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutPage  $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $getId = AboutPage::findOrFail($id);
        $getId->title = $request->input('title');
        $getId->image = $request->input('image');
        $getId->category = $request->input('category');
        $getId->description = $request->input('description');
        $getId->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutPage  $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutPage $aboutPage)
    {
        //
    }
}
