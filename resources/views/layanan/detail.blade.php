@extends('layouts.user_view')

@section('content_user')
<div class="container mb-5">
  <p class="mt-3"><b>Home</b> <span class="text-muted"> > layanan ({{$layanan->category}}) </span><span class="text-muted"> > detail</span> </p>
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-lg-6 col-md-12 px-4">
      <img width="100%" style="max-height: 600px; object-fit:contain" class="rounded" src="/uploads/layanan_photo/{{ $layanan->photo }}" alt="">
    </div>
    <div class="col-lg-6 col-md-12 px-4">
      <h1 class="fs-1 fw-bold mt-3">{{$layanan->name}}</h1>
      <p class="fs-4 text-muted">Rp. {{number_format($layanan->price,0,',','.')}}</p>
      <a target="blank" href="https://wa.me/+6287882800165" class="btn btn-whatsapp mb-3 fw-bold">Whatsapp</a>
      <?php $descriptions = explode("|", $layanan->description) ?>
      <p class="text-muted mb-0 mt-4">Deskripsi</p>
      <ul>
        @foreach ($descriptions as $description)
          <li class="text-muted">{{ $description }}</li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection