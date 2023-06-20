@extends('layouts.user_view')

@section('content_user')
<div class="container">
  <p class="mt-3"><b>Home</b> <span style="color: grey"> > {{request()->route()->uri}}</span> </p>
</div>
<div class="bg-color mb-4">
  <div class="container">
    <div class="d-flex justify-content-between">
      <h1 class="fs-1 py-5 fw-bold">ALAT TULIS KANTOR</h1>
      <img src="assets/images/alat-tulis-kantor.png" width="150px" alt="img-">
    </div>
  </div>
</div>

<div class="container mb-4">
  <div class="row d-flex justify-content-center">
    @if (count($products) == 0)
    <div class="col-4 text-center">Produk tidak tersedia</div>
    @endif
    @foreach ($products as $product)
    <div class="col-lg-4 col-md-6" >
      <div class="card card-layanan mx-auto">
        <img src="/uploads/product_photo/{{$product->photo}}" width="100%" height="250px" alt="" class="card-img-top">
        <div class="card-body pt-4">
          <h5 class="card-title mb-2">{{$product->name}}</h5>
          <?php $descriptions = explode("|", $product->description) ?>
          <p class="card-text text-muted">{{$descriptions[0]}}</p>
          {{-- <p class="card-text text-muted">Rp. {{number_format($product->price,0,',','.')}}</p> --}}
          <a href="/produk/{{$product->id}}" class="btn btn-sm btn-dark">Beli</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
{{-- 
<div class="container my-5">
  <div class="fs-3 mb-3">TESTIMONI</div>
  <div class="testimony-list mb-3">
    <div class="p-3 bg-color3 d-flex rounded mb-3">
      <p class="text-muted m-0">Nama</p>
      <span class="mx-2">-</span>
      <p class="m-0">Testimoni description</p>
    </div>
    <div class="p-3 bg-color3 d-flex rounded mb-3">
      <p class="text-muted m-0">Nama</p>
      <span class="mx-2">-</span>
      <p class="m-0">Testimoni description</p>
    </div>
    <div class="p-3 bg-color3 d-flex rounded mb-3">
      <p class="text-muted m-0">Nama</p>
      <span class="mx-2">-</span>
      <p class="m-0">Testimoni description</p>
    </div>
  </div>
  <div class="testimony-form bg-color p-4 rounded">
      <p class="fw-bold">Kirim testimoni yuk...</p>
      <form action="" method="post">
        <input type="text" name="name" id="" placeholder="Nama" class="form-control mb-3" style="border-radius: 3rem">
        <input type="text" name="description" id="" placeholder="Testimoni" class="form-control mb-3" style="border-radius: 3rem">
        <div class="ms-auto text-end">
          <button type="submit" class="btn btn-sm btn-light px-3">Kirim</button>
        </div>
      </form>
  </div>
</div> --}}
@endsection