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
        return view('admin.contact.contact_create');
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
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);


        $contact = new ContactPage;
        $contact->address = $request->input('address');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');

        //dd($contact);
        $contact->save();
        return back()->with('success', 'contact added');

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
        return view('admin.contact.contact_edit', compact('getId'));
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
        $getId->email = $request->input('email');
        $getId->save();
        return back()->with('success', 'contact updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $getId = ContactPage::findOrFail($id);
        $getId->delete();
        return redirect('admin/pages/indexContact')->with('delete', 'contact removed');
    }
}
