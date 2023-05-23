<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    //informasi kurikulum
    //osis page

    public function informasikurikulum()
    {
        return view('kurikulum.informasikurikulum');
    }
    //jadwal page

    public function jadwalptm()
    {
        return view('kurikulum.jadwalptm');
    }
}
