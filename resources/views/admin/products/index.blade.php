<x-dashboard>
  <ul class="nav nav-pills justify-content-end mb-4">
    <h4 class="align-self-center me-auto">Daftar Produk</h4>
    <li class="nav-item">
      <a class="btn btn-success" aria-current="page" href="#"><i class="fa-solid fa-plus me-2"></i>Tambah Produk</a>
    </li>
  </ul>
  <table class="table table-hover table-bordered align-middle">
    <thead class="bg-light">
      <tr>
        <th scope="col">Nama Produk</th>
        <th scope="col">Deskripsi Produk</th>
        <th scope="col">Harga</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    @foreach ($products as $product)
    <tbody>
      <tr>
        <td>
          <img src="{{ asset($product->foto) }}" alt="" width="75">
          {{ $product->nama }}
        </td>
        <td> {{ $product->deskripsi }}</td>
        <td>Rp. {{ number_format($product->harga, 0, ",", ".") }}</td>
        <td>
          <a href="" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen fa-xs me-2"></i>Edit</a>
          <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash fa-xs me-2"></i>Delete</a>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
</x-dashboard>