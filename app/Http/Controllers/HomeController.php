<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Berita;
Use App\Models\Kategori;
Use App\Models\User;

class HomeController extends Controller
{
    public function index() 
    {
        $Berita = Berita::where('status', 'Publish')
        ->get();
        $kategoriBerita = Kategori::get();

        return view('user.home', compact('Berita', 'kategoriBerita'));
    }
}
