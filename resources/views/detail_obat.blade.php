@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <p><span class="text-primary"><a href="{{ route('home') }}">Home</a></span> / {{ $obatKategori->kategori }} / {{ $obatKategori->nama }}</p>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $obatKategori->foto }}" alt="" class="img-fluid rounded shadow-sm">
        </div>
        <div class="col-md-5">
            <h5 class="fw-bold">{{ $obatKategori->nama }}</h5>
            <h3 class="fw-bold">Rp. {{ number_format($obatKategori->harga) }}, 00</h3>
            <p class="fw-bold">Kategori</p>
            <p class="text-danger">{{$obatKategori->kategori}}</p>
            <p class="fw-bold">Deskripsi</p>
            <p>{{ $obatKategori->deskripsi }}</p>
            <div class="row">
                <div class="mt-1">
                    <button class="btn btn-primary btn-block">Tambah Ke Keranjang</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 bg-white shadow-sm rounded py-3">
            <h5>Produk Serupa</h5>
            @foreach ($obat->take(4) as $item)
                <img src="{{ $item->foto }}" alt="" class="img-fluid rounded shadow-sm" style="max-width: 7rem">
                <p class="fw-bold">{{ $item->nama }}</p>
                <h5 class="fw-bold">Rp. {{ number_format($item->harga) }}, 00</h5>
                <p class="text-danger">{{$item->kategori}}</p>
            @endforeach
        </div>
    </div>
</div>

@endsection
