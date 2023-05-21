<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function process(){
        return view ("process.index", ["title" => "Process"]);
    }
}
