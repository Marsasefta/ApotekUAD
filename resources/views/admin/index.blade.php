@extends('layouts.dashboard')
@section('content')
<div class="container-fluid p-5" style="background-color: white; margin-bottom: 10rem">
  @if (session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
  </div>
  @endif
      <div class="row">
        <div class="col-md-3">
          <div class="card border-bottom-secondary border-bottom-5 mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Stok Obat</h5>
                  <h1 class="fw-bold">{{$obat->count()}}</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card border-bottom-danger border-bottom-5 mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Obat Merah</h5>
                  <h1 class="fw-bold">{{App\Models\Obat::get(['kategori'])->where('kategori', 'Obat Merah')->count()}}</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card border-bottom-primary border-bottom-5 mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Obat Biru</h5>
                  <h1 class="fw-bold">{{App\Models\Obat::get(['kategori'])->where('kategori', 'Obat Kuning')->count()}}</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card border-bottom-success border-bottom-5 mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Obat Hijau</h5>
                  <h1 class="fw-bold">{{App\Models\Obat::get(['kategori'])->where('kategori', 'Obat Hijau')->count()}}</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah obat
      </button>
      @include('includes.modal_tambah_obat')
    <table id="tabel_obat" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Obat</th>
                <th>Kategori Obat</th>
                <th>Harga Obat (Rp)</th>
                <th>Stok Obat</th>
                <th>Foto Obat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($obat as $dataObat)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$dataObat->nama}}</td>
                <td>{{$dataObat->kategori}}</td>
                <td>{{number_format($dataObat->harga)}}</td>
                <td>{{$dataObat->stok}}</td>
                <td><img src="{{ Storage::url('public/obat/').$dataObat->foto }}" width="100px"></td>
                <td>
                  <div class="row">
                    <div class="col-sm-6">
                      <a href="" class="btn btn-warning btn-block text-white" data-bs-toggle="modal" data-bs-target="#edit{{ $dataObat->id }}">
                        <i class="bi bi-pen-fill"></i>
                      </a>
                      @include('includes.modal_edit_obat')
                    <div class="col-sm-6">
                     <form action="{{ route('delete-obat', ['id'=>$dataObat->id]) }}" method="post">
                      @csrf
                      @method('delete')
                        <button class="btn btn-danger btn-block text-white" onclick="return confirm('Anda yakin akan menghapus data ini?')"><i class="bi bi-trash-fill"></i></button>
                     </form>
                    </div>
                  </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection