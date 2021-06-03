@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <p><span class="text-primary"><a href="{{ route('home') }}">Beli Obat</a></span> &raquo; {{ $obat->nama }}</p>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $obat->foto }}" alt="" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h5 class="fw-bold">{{ $obat->nama }}</h5>
            <h3 class="fw-bold">Rp. {{ number_format($obat->harga) }}, 00</h3>
            <p>Kategori: <span class="badge bg-danger p-1">{{$obat->kategori}}</span></p>
            <p class="mt-3">Deskripsi: {{ $obat->deskripsi }}</p>
            <div class="row">
                <div class="col-md-4 mt-1"><button class="btn btn-primary btn-block">Add To Cart</button></div>
                <div class="col-md-4 mt-1"><button class="btn btn-success btn-block">Beli Sekarang</button></div>
            </div>
        </div>
    </div>
</div>

@endsection
