<x-layout>
  <x-navigation/>
  <div class="container mt-5">
    @foreach ($products as $product)
      <div class="col-2">
        <div class="card">
          <img src="{{ asset($product->foto) }}" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">{{ $product->nama }}</h5>
            <p class="card-text">{{ $product->deskripsi }}</p>
            <p class="card-text">Rp. {{ number_format($product->harga, 0, ",", ".") }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</x-layout>