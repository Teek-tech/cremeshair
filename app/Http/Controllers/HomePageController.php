<?php

namespace App\Http\Controllers;
use File;
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
        return view('admin.home.homePage_create');
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
        $content->client_name = $request->input('client_name');
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $contentImage = $content->category.'_image'.time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save( public_path('/images/home_page/' . $contentImage ) );
            $content->image = $contentImage;
        };

        $content->rank = $request->input('rank');
        //dd($content);
        $content->save();
        return back()->with('success', 'content added');
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
        return view('admin.home.homePage_edit', compact('getId'));
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
        $getId->client_name = $request->input('client_name');
        $getId->image = $request->input('image');
        $getId->rank = $request->input('rank');

        if($request->hasFile('image')){
            $oldImage = '/images/home_page/'.$getId->image;
            if(File::exists($oldImage)){
                File::delete($oldImage);
            }
            $image = $request->file('image');
            $contentImage = $getId->category.'_image'.time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save( public_path('/images/home_page/' . $contentImage ) );
            $getId->image = $contentImage;

        }

        $getId->save();
        return back()->with('success', 'content updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $getId = HomePage::findOrFail($id);
        $getId->delete();
        return redirect('admin/pages/Indexhome')->with('delete', 'content removed');
    }
}
