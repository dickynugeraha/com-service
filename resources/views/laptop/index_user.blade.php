@extends('layouts.user_view')

@section('content_user')
<div class="container">
  <p class="mt-3"><b>Home</b> <span style="color: grey"> > {{request()->route()->uri}}</span> </p>
</div>
<div class="bg-color mb-4">
  <div class="container">
    <div class="d-flex justify-content-between">
      <h1 class="fs-1 py-5 fw-bold">LAPTOP</h1>
      <img src="assets/images/laptop.png" width="150px" alt="img-">
    </div>
  </div>
</div>
<div class="container mb-4">
  <div class="row d-flex justify-content-center">
    @if (count($laptops) == 0)
    <div class="col-4 text-center">Laptop tidak tersedia</div>
    @endif
    @foreach ($laptops as $laptop)
    <div class="col-lg-4 col-md-6" >
      <div class="card card-layanan mx-auto">
        <?php $photos = explode("|", $laptop->photo) ?>
        <img src="/uploads/laptop_photo/{{$photos[0]}}" width="100%" height="250px" alt="" class="card-img-top">
        <div class="card-body pt-4">
          <h5 class="card-title mb-2">{{$laptop->name}}</h5>
          <p class="card-text text-muted">Rp. {{number_format($laptop->price,0,',','.')}}</p>
          <a href="/laptop/{{$laptop->id}}" class="btn btn-sm btn-dark">Beli</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<div class="bg-color mb-4">
  <div class="container">
    <div class="d-flex justify-content-between">
      <img src="assets/images/service.png" width="150px" alt="img-">
      <h1 class="fs-1 py-5 fw-bold">SERVICES</h1>
    </div>
  </div>
</div>
<div class="container mb-4">
  <div class="row d-flex justify-content-center">
    @if (count($services) == 0)
    <div class="col-4 text-center">Service tidak tersedia</div>
    @endif
    @foreach ($services as $service)
    <div class="col-lg-4 col-md-6" >
      <div class="card card-layanan mx-auto">
        <?php $photos = explode("|", $service->photo) ?>
        <img src="/uploads/laptop_photo/{{$photos[0]}}" width="100%" height="250px" alt="" class="card-img-top">
        <div class="card-body pt-4">
          <h5 class="card-title mb-2">{{$service->name}}</h5>
          <p class="card-text text-muted">Rp. {{number_format($service->price,0,',','.')}}</p>
          <a href="/laptop/{{$service->id}}" class="btn btn-sm btn-dark">Beli</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<div class="bg-color mb-4">
  <div class="container">
    <div class="d-flex justify-content-between">
      <h1 class="fs-1 py-5 fw-bold">SPERPARTS</h1>
      <img src="assets/images/sperpart.png" width="150px" alt="img-">
    </div>
  </div>
</div>
<div class="container mb-4">
  <div class="row d-flex justify-content-center">
    @if (count($sperparts) == 0)
        <div class="col-4 text-center">Sperpart tidak tersedia</div>
    @endif
    @foreach ($sperparts as $sperpart)
    <div class="col-lg-4 col-md-6" >
      <div class="card card-layanan mx-auto">
        <?php $photos = explode("|", $sperpart->photo) ?>
        <img src="/uploads/laptop_photo/{{$photos[0]}}" width="100%" height="250px" alt="" class="card-img-top">
        <div class="card-body pt-4">
          <h5 class="card-title mb-2">{{$sperpart->name}}</h5>
          <p class="card-text text-muted">Rp. {{number_format($sperpart->price,0,',','.')}}</p>
          <a href="/laptop/{{$sperpart->id}}" class="btn btn-sm btn-dark">Beli</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<div class="container my-5">
  <div class="fs-3 mb-3">TESTIMONI</div>
  <div class="testimony-list mb-3">
    <?php 
    $countLoop = count($testimonies);
    if ($countLoop >= 5) {
      $countLoop = 5;
    } 
  ?>
  @for ($i = 0; $i < $countLoop; $i++)
    <div class="p-3 bg-color3 d-flex rounded mb-3">
      <p class="text-muted m-0">{{$testimonies[$i]->name}}</p>
      <span class="mx-2">-</span>
      <p class="m-0">{{$testimonies[$i]->description}}</p>
    </div>
  @endfor

  </div>
  <div class="testimony-form bg-color p-4 rounded">
      <p class="fw-bold">Kirim testimoni yuk...</p>
      <form action="/testimony" method="post">
        <input type="text" name="name" id="" placeholder="Nama" class="form-control mb-3" style="border-radius: 3rem">
        <input type="text" name="description" id="" placeholder="Testimoni" class="form-control mb-3" style="border-radius: 3rem">
        <input type="hidden" name="category" value="laptop">
        <div class="ms-auto text-end">
          <button type="submit" class="btn btn-sm btn-light px-3">Kirim</button>
        </div>
      </form>
  </div>
</div>
@endsection