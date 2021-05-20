@extends('layouts.dashboard')
@section('content')
<div class="container-fluid p-5" style="background-color: white; margin-bottom: 10rem">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Stok Obat</h5>
                  <h1 class="fw-bold">{{$obat->count()}}</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Obat Merah</h5>
                  <h1 class="fw-bold">{{App\Models\Obat::get(['kategori'])->where('kategori', 'obat merah')->count()}}</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Stok Obat</h5>
                  <h1 class="fw-bold">50</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah obat
      </button>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('add-obat') }}" method="post">
              @csrf
              <div class="modal-body">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Produk</label>
                  <input class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                  <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                  <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                </div>
                <div class="mb-3">
                  <label for="kategori" class="form-label">Kategori Produk</label>
                  <input class="form-control" id="kategori" name="kategori">
                </div>
                <div class="mb-3">
                  <label for="harga" class="form-label">Harga Produk</label>
                  <input class="form-control" id="harga" name="harga">
                </div>
                <div class="mb-3">
                  <label for="stok" class="form-label">Stok Produk</label>
                  <input class="form-control" id="stok" name="stok">
                </div>
                <div class="mb-3">
                  <label for="foto" class="form-label">Foto Produk</label>
                  <input class="form-control" id="foto" name="foto">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <table id="tabel_obat" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Obat</th>
                <th>Deskripsi Obat</th>
                <th>Kategori Obat</th>
                <th>Harga Obat</th>
                <th>Stok Obat</th>
                <th>Foto Obat</th>
                <th>Aksi</th>
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
                <td><img src="{{$dataObat->foto}}" alt="" width="100px"></td>
                <td>
                  <div class="row">
                    <div class="col-sm-6">
                      <button class="btn btn-warning btn-block text-white"><i class="bi bi-pen-fill"></i></button>
                    </div>
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
            @empty
                <h1>Belum ada data</h1>
            @endforelse
        </tbody>
    </table>
</div>
@endsection