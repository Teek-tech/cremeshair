<?php

namespace App\Http\Controllers;
use File;
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
        return view('admin.salesRep.salesRep_create');
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
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:sales_rep_pages',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:11'
        ]);

        $salesRep = new SalesRepPage;
        $salesRep->name = $request->input('name');
        $salesRep->email = $request->input('email');
        $salesRep->phone = $request->input('phone');

        if($request->hasFile('image')){
            $image = $request->file('image');
            $salesRepImage = $salesRep->category.'_image'.time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save( public_path('/images/sales_rep/' . $salesRepImage ) );
            $salesRep->image = $salesRepImage;
        };

        //dd($salesRep);
        $salesRep->save();
        return back()->with('success', 'Sales representative added');
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
        return view('admin.salesRep.salesRep_edit', compact('getId'));
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

        if($request->hasFile('image')){
            $oldImage = '/images/sales_rep/'.$getId->image;
            if(File::exists($oldImage)){
                File::delete($oldImage);
            }
            $image = $request->file('image');
            $contentImage = $getId->category.'_image'.time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save( public_path('/images/sales_rep/' . $contentImage ) );
            $getId->image = $contentImage;

        }
        $getId->save();
        return back()->with('success', 'Sales representative details updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SalesRepPage  $salesRepPage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $getId = SalesRepPage::findOrFail($id);
        $getId->delete();
        return redirect('admin/pages/IndexsalesRep')->with('delete', 'Sales representative removed');
    }
}
