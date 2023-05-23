<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use App\Models\Post;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
    public function index(Request $request)
    {
        $name = 'Sambutan Kepala Sekolah';
        $landing = Post::all();
        return view('landing', compact('name', 'landing'));
    }
}
