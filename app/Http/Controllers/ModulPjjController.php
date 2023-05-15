<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModulPjjController extends Controller
{
    public function index(Request $request)
    {
        return view('modulpjj', [
            "modules" => Module::all()
        ]);
    }

    public function download(Module $module)
    {
        return Storage::download($module->file);
    }
}
