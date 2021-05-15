<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $obat = Obat::all();
        return view('admin.index', compact('obat'));
    }

    public function store(Request $request)
    {
        Obat::create($request->all());
        return redirect()->route('home');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
