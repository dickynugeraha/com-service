@extends('layouts.user_view')

@section('content_user')
<div class="container mb-5">
  <p class="mt-3"><b>Home</b> <span class="text-muted"> > laptop ({{$laptop->category}}) </span><span class="text-muted"> > detail</span> </p>
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-lg-6 col-md-12 px-4">
      <?php $photos = explode("|", $laptop->photo) ?>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/uploads/laptop_photo/{{$photos[0]}}" class="d-block w-100" alt="photo">
          </div>
          <div class="carousel-item">
            <img src="/uploads/laptop_photo/{{$photos[1]}}" class="d-block w-100" alt="photo">
          </div>
          <div class="carousel-item">
            <img src="/uploads/laptop_photo/{{$photos[2]}}" class="d-block w-100" alt="photo">
          </div>
          <div class="carousel-item">
            <img src="/uploads/laptop_photo/{{$photos[3]}}" class="d-block w-100" alt="photo">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 px-4">
      <h1 class="fs-1 fw-bold mt-3">{{$laptop->name}}</h1>
      <p class="fs-4 text-muted">Rp. {{number_format($laptop->price,0,',','.')}}</p>
      <a target="blank" href="https://wa.me/+6287882800165" class="btn btn-whatsapp mb-3 fw-bold">Whatsapp</a>
      <p class="text-muted">Untuk selajutnya silakan hubungi kami melalui WhatsApp untuk melakukan konsultasi dan pemesanan terimakasih.</p>
    </div>
  </div>
  <div class="container">
    <h1 class="mb-0 mt-4 fs-4 fw-bold">Deskripsi</h1>
    <?php $descriptions = explode("|", $laptop->description) ?>
    <ul class="mt-2">
      @foreach ($descriptions as $description)
        <li class="text-muted">{{ $description }}</li>
      @endforeach
    </ul>
  </div>
</div>
@endsection