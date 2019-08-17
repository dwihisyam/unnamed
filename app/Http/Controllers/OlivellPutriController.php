<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class OlivellPutriController extends Controller
{
    public function index()
    {
        return view('olivellputri/index');
    }

    public function home()
    {
        return view('olivellputri/home');
    }

    public function mempelai()
    {
        return view('olivellputri/mempelai');
    }

    public function acara()
    {
        return view('olivellputri/acara');
    }

    public function galeri()
    {
        return view('olivellputri/galeri');
    }

    public function lokasi()
    {
        return view('olivellputri/lokasi');
    }
}
