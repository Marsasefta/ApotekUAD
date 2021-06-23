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
        return redirect()->route('dashboard');
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
        $obat = Obat::findOrFail($id);
        $obat->update($request->all());
        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();
        return redirect()->route('dashboard');
    }
}
