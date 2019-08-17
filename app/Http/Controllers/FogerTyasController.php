<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class FogerTyasController extends Controller
{
    public function index()
    {
        return view('fogertyas/index');
    }

    public function home()
    {
        return view('fogertyas/home');
    }

    public function mempelai()
    {
        return view('fogertyas/mempelai');
    }

    public function acara()
    {
        return view('fogertyas/acara');
    }

    public function galeri()
    {
        return view('fogertyas/galeri');
    }

    public function lokasi()
    {
        return view('fogertyas/lokasi');
    }

    public function ucapan()
    {
        $komentar = DB::table('komentars')->where('user', 'fogertyas')->get();
        return view('fogertyas/ucapan', ['komentar' => $komentar]);
    }

    public function create(Request $request)
    {
        DB::table('komentars')->insert([
            'user' => 'fogertyas',
            'nama' => $request->nama,
            'komentar' => $request->komentar,
            'tanggal' => Carbon::now()
        ]);
        return redirect('/fogertyas');
    }
}
