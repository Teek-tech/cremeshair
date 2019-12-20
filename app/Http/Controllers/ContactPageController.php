<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class ContactPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.pages.pages_contact');
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
        $contact = new ContactPage;
        $contact->address = $request->input('address');
        $contact->phone = $request->input('phone');

        //dd($contact);
        $contact->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function show(ContactPage $contactPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $getId = ContactPage::findOrFail($id);
        return view('admin.edit.edit_contact', compact('getId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $getId = ContactPage::findOrFail($id);
        $getId->address = $request->input('address');
        $getId->phone = $request->input('phone');
        $getId->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactPage $contactPage)
    {
        //
    }
}
