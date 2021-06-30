<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $obat = Obat::when($request->keyword, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->keyword}%")
                ->orWhere('kategori', 'like', "%{$request->keyword}%");
        })->paginate(5);
        return view('home', compact('obat'));
    }

    public function detail($slug)
    {
        $obatKategori = Obat::where('slug', $slug)->first();
        $obat = Obat::all();
        return view('detail_obat', compact('obat', 'obatKategori'));
    }
}
