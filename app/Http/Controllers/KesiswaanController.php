<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KesiswaanController extends Controller
{
    //osis page

    public function osis()
    {
        return view('kesiswaan.osis');
    }
    //osis page

    public function tatatertib()
    {
        return view('kesiswaan.tatatertib');
    }
    //osis page

    public function datasiswa()
    {
        return view('kesiswaan.datasiswa');
    }
    public function basket()
    {
        return view('kesiswaan.basket');
    }
    //osis page

    public function futsal()
    {
        return view('kesiswaan.futsal');
    }
    //osis page

    public function marchingband()
    {
        return view('kesiswaan.marchingband');
    }
}
