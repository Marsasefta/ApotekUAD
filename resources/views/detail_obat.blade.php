@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <p><span class="text-primary"><a href="{{ route('home') }}">Home</a></span> / {{ $obat->kategori }} / {{ $obat->nama }}</p>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $obat->foto }}" alt="" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h5 class="fw-bold">{{ $obat->nama }}</h5>
            <h3 class="fw-bold">Rp. {{ number_format($obat->harga) }}, 00</h3>
            <p class="fw-bold">Kategori</p>
            <p class="text-danger">{{$obat->kategori}}</p>
            <p class="fw-bold">Deskripsi</p>
            <p>{{ $obat->deskripsi }}</p>
            <div class="row">
                <div class="col-md-4 mt-1"><button class="btn btn-primary btn-block">Add To Cart</button></div>
                <div class="col-md-4 mt-1"><button class="btn btn-success btn-block">Beli Sekarang</button></div>
            </div>
        </div>
    </div>
</div>

@endsection
