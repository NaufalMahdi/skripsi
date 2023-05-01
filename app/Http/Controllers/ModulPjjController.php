<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulPjjController extends Controller
{
    public function index(Request $request)
    {
        return view('modulpjj');
    }
}
