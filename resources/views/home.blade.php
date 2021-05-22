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
                <img src="https://awsimages.detik.net.id/community/media/visual/2019/08/15/47149413-a2eb-4fc2-acbb-4825c8104a4a_169.jpeg?w=700&q=90" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://dinkes.palangkaraya.go.id/wp-content/uploads/sites/19/2019/10/fakta-penarikan-obat-ranitidin-alodokter-650x330.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://akcdn.detik.net.id/visual/2020/03/20/854a494c-e2e8-408d-9091-da63886865c0_169.jpeg?w=650" class="d-block w-100" alt="...">
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
      {{-- Obat Merah --}}
      <h3>Obat Merah</h3>
        <div class="row justify-content-center text-dark">
            @foreach ($obat->take(6) as $dataObat)
            <div class="col-md-2">
                <figure class="figure border rounded">
                    <img src="{{$dataObat->foto}}" class="figure-img img-fluid" alt="...">
                    <div class="p-3">
                      <h5>{{$dataObat->nama}}</h5>
                      <h5 class="fw-bold">{{$dataObat->harga}}</h5>
                      <span class="badge bg-danger p-1">{{$dataObat->kategori}}</span>
                    </div>
                </figure>
            </div>
            @endforeach
        </div>
        {{-- Akhir Obat Merah --}}
        {{-- Obat Biru --}}
        <h3>Obat Biru</h3>
          <div class="row justify-content-center text-dark">
              @foreach ($obat->take(6) as $dataObat)
              <div class="col-md-2">
                  <figure class="figure border rounded">
                      <img src="{{$dataObat->foto}}" class="figure-img img-fluid" alt="...">
                      <div class="p-3">
                        <h5>{{$dataObat->nama}}</h5>
                        <h5 class="fw-bold">{{$dataObat->harga}}</h5>
                        <span class="badge bg-danger p-1">{{$dataObat->kategori}}</span>
                      </div>
                  </figure>
              </div>
              @endforeach
          </div>
          {{-- Akhir Obat Biru --}}
        {{-- Obat Hijau --}}
        <h3>Obat Hijau</h3>
          <div class="row justify-content-center text-dark">
              @foreach ($obat->take(6) as $dataObat)
              <div class="col-md-2">
                  <figure class="figure border rounded">
                      <img src="{{$dataObat->foto}}" class="figure-img img-fluid" alt="...">
                      <div class="p-3">
                        <h5>{{$dataObat->nama}}</h5>
                        <h5 class="fw-bold">{{$dataObat->harga}}</h5>
                        <span class="badge bg-danger p-1">{{$dataObat->kategori}}</span>
                      </div>
                  </figure>
              </div>
              @endforeach
          </div>
          {{-- Akhir Obat Hijau --}}
    </div>
</section>
{{-- Akhir Bagian Obat --}}

@endsection
