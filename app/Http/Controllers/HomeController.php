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
        $obat = Obat::findOrFail($id);
        return view('detail_obat', compact('obat'));
    }
}
