<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardController extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $obat = Obat::paginate(10);
        return view('admin.index', compact('obat'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto'     => 'required|image|mimes:png,jpg,jpeg',
        ]);

        //upload image
        $foto = $request->file('foto');
        $foto->storeAs('public/obat', $foto->hashName());

        $obat = Obat::create([
            'nama'     => $request->nama,
            'slug'     => Str::slug($request->nama),
            'deskripsi'     => $request->deskripsi,
            'kategori'     => $request->kategori,
            'harga'     => $request->harga,
            'stok'     => $request->stok,
            'foto'     => $foto->hashName(),
        ]);

        return redirect()->route('dashboard')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $obat
     * @return void
     */
    public function update(Request $request, $id)
    {
        $obat = Obat::findOrFail($id);
        if ($request->file('foto') == "") {

            $obat->update([
                'nama'     => $request->nama,
                'slug'     => Str::slug($request->nama),
                'deskripsi'     => $request->deskripsi,
                'kategori'     => $request->kategori,
                'harga'     => $request->harga,
                'stok'     => $request->stok,
            ]);
        } else {

            //hapus old foto
            Storage::disk('local')->delete('public/obat/' . $obat->foto);

            //upload new foto
            $foto = $request->file('foto');
            $foto->storeAs('public/obat', $foto->hashName());

            $obat->update([
                'foto'     => $foto->hashName(),
                'nama'     => $request->nama,
                'slug'     => Str::slug($request->nama),
                'deskripsi'     => $request->deskripsi,
                'kategori'     => $request->kategori,
                'harga'     => $request->harga,
                'stok'     => $request->stok,
            ]);
        }

        // if ($obat) {
        //     //redirect dengan pesan sukses
        return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Diupdate!']);
        // } else {
        //     //redirect dengan pesan error
        //     return redirect()->route('admin.index')->with(['error' => 'Data Gagal Diupdate!']);
        // }
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);

        Storage::disk('local')->delete('public/obat/' . $obat->image);

        $obat->delete();

        if ($obat) {
            //redirect dengan pesan sukses
            return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('dashboard')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
