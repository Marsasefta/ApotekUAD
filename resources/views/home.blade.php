@extends('layouts.app')

@section('content')

{{-- Bagian Banner --}}
<section id="banner">
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner rounded-3">
              <div class="carousel-item active">
                <img src="{{asset('/images/banner12.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('/images/banner13.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('/images/BANNER-WEB-DBD-2017.jpg')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
</section>
{{-- Akhir BAgian Banner --}}

{{-- Bagian Obat --}}
<section id="bagian-obat">
    <div class="container-fluid mt-5">
      <h3>Obat Merah</h3>
        <div class="row justify-content-center text-dark">
            @foreach ($obat->take(6) as $dataObat)
            <div class="col-md-4 col-lg-2">
                <figure class="figure border rounded shadow-sm">
                    <img src="{{$dataObat->foto}}" class="figure-img img-fluid" alt="...">
                    <div class="p-3">
                      <div>
                        <h5>{{$dataObat->nama}}</h5>
                        <h5 class="fw-bold">Rp. {{number_format($dataObat->harga)}}, 00</h5>
                        <span class="badge bg-danger p-1">{{$dataObat->kategori}}</span>
                      </div>
                      <a href="{{ route('detail_obat', $dataObat->id) }}" class="btn btn-primary mt-3">Beli Sekarang</a>
                    </div>
                </figure>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- Akhir Bagian Obat --}}

@endsection
