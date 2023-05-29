<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_contact = Contact::where('user_id', auth()->user()->id)->get()->count();
        $cari_contact = Contact::where('user_id', auth()->user()->id)->filter(request(['search']))->get();
        $contact = Contact::where('user_id', auth()->user()->id)->get();
        $user = Auth::user()->username;

        return view("dashboard.contact.index", [
            "title" => "Dashboard",
            "contacts" => $contact,
            "contacts" => $cari_contact,
        ])->with('user', $user)->with('total_contact', $total_contact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->username;
        return view("dashboard.contact.create", [
            "title" => "Tambah Kontak",
            "categories" => Category::all()
        ])->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:40',
            'category_id' => 'required',
            'phone_number' => 'required|string|regex:/^(\+[0-9]{1,3})?([0-9]{10,13})$/',
            'email' => 'required|email:dns',
            'address' => 'required|max:100'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Contact::create($validatedData);

        return redirect('/dashboard/contacts')->with('success', 'New contact has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {

    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('dashboard.contact.edit', [
            'contact' => $contact,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $validated_data = $request->validate([
            'name' => 'required|max:40',
            'category_id' => 'required',
            'phone_number' => 'required|string|regex:/^(\+[0-9]{1,3})?([0-9]{10,13})$/',
            'email' => 'required|email:dns',
            'address' => 'required|max:100'
        ]);

        // $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;

        Contact::whereId($contact->id)->update($validatedData);

        return redirect('/dashboard/contacts')->with('success', 'Contact has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        Contact::destroy($contact->id);

        return redirect('/dashboard/contacts')->with('success', 'Contact has been deleted!');
    }
}
