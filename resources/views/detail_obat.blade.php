@extends('layouts.app')

@section('content')
<div class="container mb-5" style="display: flex; flex-direction: column; justify-content: center; align-items: center">
    <p><span class="text-primary"><a href="{{ route('home') }}">Home</a></span> / {{ $obatKategori->kategori }} / {{ $obatKategori->nama }}</p>
    <div class="row">
        <div class="col-md-7 mr-5">
            <h3 class="fw-bold">{{ $obatKategori->nama }}</h3>
            <h1 class="fw-bold">Rp. {{ number_format($obatKategori->harga) }}, 00</h1>
            <h5 class="fw-bold mt-3">Kategori</h5>
            <h5 class="text-danger">{{$obatKategori->kategori}}</h5>
            <img src="{{ Storage::url('public/obat/').$obatKategori->foto }}" class="img-fluid rounded shadow-sm" alt="...">
            <h5 class="fw-bold mt-5">Deskripsi</h5>
            <p>{{ $obatKategori->deskripsi }}</p>
            <div class="row">
                <div class="mt-1">
                    <button class="btn btn-primary btn-block">Tambah Ke Keranjang</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 bg-white shadow-sm rounded py-3">
            <h5>Produk Serupa</h5>
            @foreach ($obat->take(4) as $item)
                <figure class="border rounded shadow-sm">
                    <img src="{{ Storage::url('public/obat/').$item->foto }}" class="figure-img img-fluid" alt="...">
                    <div class="p-3">
                    <div>
                        <h5>{{$item->nama}}</h5>
                        <h5 class="fw-bold">Rp. {{number_format($item->harga)}}, 00</h5>
                        <span class="badge bg-danger p-1">{{$item->kategori}}</span>
                    </div>
                    <a href="{{ route('detail_obat', $item->id) }}" class="btn btn-primary mt-3">Beli Sekarang</a>
                    </div>
                </figure>
            @endforeach
        </div>
    </div>
</div>

@endsection
