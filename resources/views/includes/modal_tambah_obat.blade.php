<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('add-obat') }}" method="post" enctype="multipart/form-data">
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
              <select class="form-select" id="kategori" name="kategori">
                <option selected>--Pilih Kategori--</option>
                <option value="Obat Merah">Obat Merah</option>
                <option value="Obat Kuning">Obat Kuning</option>
                <option value="Obat Hijau">Obat Hijau</option>
              </select>
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
              <input class="form-control" id="foto" name="foto" type="file">
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