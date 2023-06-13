<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filters = $request->only('search');
        $total_contact = Contact::where('user_id', auth()->user()->id)->get()->count();
        $contacts = Contact::where('user_id', auth()->user()->id)->filter($filters)->orderByRaw("SUBSTRING(name, 1, 1) ASC")->orderBy('name', 'ASC')->paginate(15)->withQueryString();
        $user = Auth::user()->username;

        return view("dashboard.contact.index", [
            "title" => "Dashboard",
            "contacts" => $contacts,
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
            'email' => 'nullable|email',
            'address' => 'required|max:100',
            'image' => 'image|file|max:3000|mimes:jpg,jpeg,png'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('contact-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Contact::create($validatedData);

        return redirect('/dashboard/contacts')->with('add', 'Berhasil menambahkan kontak!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $user = Auth::user()->username;
        $contact = Contact::findOrFail($id);

        return view('dashboard.contact.show', [
            'title' => 'Detail Kontak',
            'contact' => $contact,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user()->username;
        $contact = Contact::findOrFail($id);

        return view('dashboard.contact.edit', [
            'title' => 'Edit Kontak',
            'contact' => $contact,
            'categories' => Category::all(),
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $rules = [
            'name' => 'required|max:40',
            'category_id' => 'required',
            'phone_number' => 'required|string|regex:/^(\+[0-9]{1,3})?([0-9]{10,13})$/',
            'email' => 'nullable|email',
            'address' => 'required|max:100',
            'image' => 'image|file|max:3000|mimes:jpg,jpeg,png'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('contact-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Contact::where("id", $id)->update($validatedData);

        return redirect('/dashboard/contacts')->with('update', 'Kontak berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);

        if ($contact->image) {
            Storage::delete($contact->image);
        }

        Contact::destroy($id);
        // Contact::where("id", $id)->delete();
        return redirect('/dashboard/contacts')->with('delete', 'Kontak berhasil dihapus!');
    }
}
