<x-dashboard>
  <h5 class="mb-3">Tambah Produk</h5>
  <form class="mx-auto bg-light shadow p-4" method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="namaProduk" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="namaProduk" name="nama" value="{{ old('nama') }}">
      @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="hargaProduk" class="form-label">Harga Produk</label>
      <input type="number" class="form-control" id="hargaProduk" name="harga" value="{{ old('harga') }}">
      @error('harga')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="fotoProduk" class="form-label">Foto Produk</label>
      <input class="form-control" type="file" id="fotoProduk" name="foto" value="{{ old('foto') }}">
      @error('foto')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="deskripsiProduk" class="form-label">Deskripsi Produk</label>
      <textarea class="form-control" id="deskripsiProduk" rows="3" name="deskripsi" value="{{ old('deskripsi') }}"></textarea>
      @error('deskripsi')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
  </form>
</x-dashboard>