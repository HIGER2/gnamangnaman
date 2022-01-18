<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function showindex()
    {

        return view('page.index');
    }

    public function showprofil()
    {

        return view('page.profil');
    }
}
