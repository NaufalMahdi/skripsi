<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.module.index', [
            'module' => Module::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.module.create');
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
            'name' => 'required|max:255',
            'file' => 'file|mimes:docx,pdf,doc',
        ]);

        if ($request->file('file')) {
            $validatedData['file'] = $request->file('file')->store('post-file');
        }

        Module::create($validatedData);

        return redirect('/dashboard/module')->with('success', 'Berhasil di Tambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */



    public function destroy(Module $module)
    {
        Module::destroy($module->id);
        return redirect('/dashboard/module')->with('success', 'Post Berhasil di Hapus !');
    }
}
