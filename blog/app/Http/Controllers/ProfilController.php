<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function rocky()
    {
        return view('profil.rocky');
    }

    public function janshen()
    {
        return view('profil.janshen');
    }

    public function dennis()
    {
        return view('profil.dennis');
    }

    public function isro()
    {
        return view('profil.isro');
    }
}
