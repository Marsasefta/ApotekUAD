@extends('layouts.dashboard')
@section('content')
<div class="container-fluid p-5" style="background-color: white; margin-bottom: 50rem">
    <table id="tabel_obat" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Obat</th>
                <th>Deskripsi Obat</th>
                <th>Kategori Obat</th>
                <th>Harga Obat</th>
                <th>Stok Obat</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($obat as $dataObat)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$dataObat->nama}}</td>
                <td>{{$dataObat->deskripsi}}</td>
                <td>{{$dataObat->kategori}}</td>
                <td>{{$dataObat->harga}}</td>
                <td>{{$dataObat->stok}}</td>
            </tr>
            @empty
                <h1>Belum ada data</h1>
            @endforelse
        </tbody>
    </table>
</div>
@endsection