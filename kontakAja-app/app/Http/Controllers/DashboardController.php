<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $total_contact = Contact::where('user_id', auth()->user()->id)->get()->count();
        $user = Auth::user()->username;
        $name = Auth::user()->name;
        $recentContacts = $this->getRecentContacts($request);

        return view("dashboard.index", [
            "title" => "Dashboard"
        ])->with([
            'user' => $user,
            'name' => $name,
            'total_contact' => $total_contact,
            'recentContacts' => $recentContacts
        ]);
    }

    private function getRecentContacts(Request $request)
    {

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('contact-images');
        }

        $recentContacts = Contact::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->take(5) // Ubah angka 5 sesuai dengan jumlah kontak terbaru yang ingin ditampilkan
            ->get();

        return $recentContacts;
    }
}
