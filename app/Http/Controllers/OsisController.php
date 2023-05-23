<?php

namespace App\Http\Controllers;

use App\Models\Osis;
use Illuminate\Http\Request;

class OsisController extends Controller
{

    public function index()
    {
        return view('kesiswaan.osis', [
            "title" => "Osis",
            "osis" => Osis::latest()->get()[0]
        ]);
    }
}
