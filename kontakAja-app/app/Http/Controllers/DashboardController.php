<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user()->username;
        return view("dashboard", ["title" => "Dashboard"])->with('user', $user);
    }
}
