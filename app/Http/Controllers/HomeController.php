<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $obat = Obat::all();
        return view('home', compact('obat'));
    }

    public function detail($id)
    {
        $obatKategori = Obat::findOrFail($id);
        $obat = Obat::all();
        return view('detail_obat', compact('obat', 'obatKategori'));
    }
}
