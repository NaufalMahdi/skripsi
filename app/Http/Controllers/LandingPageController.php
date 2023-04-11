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
        $name = 'Sekilas Tentang SMP Negeri 1 Jember';
        $landing = Post::all();
        return view('landing', compact('name', 'landing'));
    }
}
