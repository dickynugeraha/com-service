@extends('layouts.admin_view', ["title" => "Layanan"])
@section("content_admin")

<div class="row justify-content-center my-4">
  <div class="col-md-2">
    <a data-bs-toggle="modal" data-bs-target="#modalAddLaptop" href="#" class="fs-6 d-block text-decoration-none bg-color rounded color-white text-center py-2 fw-bold">
      Tambah laptop
    </a>
  </div>
</div>
<script>
  let msg = '{{Session::get('alert')}}';
  let exist = '{{Session::has('alert')}}';

  if (exist){
    alert(msg);
  }
 </script>
 <div class="modal fade" id="modalAddLaptop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Tambah laptop</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/laptop" method="post" enctype="multipart/form-data">
          <div class="modal-body">
              <div class="mb-2">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" name="name" id="name" class="form-control" required>
              </div>
              <div class="mb-2">
                  <label for="price" class="form-label">Harga</label>
                  <input type="number" name="price" id="price" class="form-control" required>
              </div>
              <div class="mb-2">
                  <label for="description" class="form-label">Deskripsi</label>
                  <input type="text" name="description" id="description" class="form-control" required>
              </div>
              <div class="mb-2">
                  <label for="laptop_photo" class="form-label">Gambar</label>
                  <input type="file" name="laptop_photo[]" multiple id="laptop_photo" class="form-control" required>
              </div>
              <div class="mb-2">
                  <label for="category" class="form-label">Kategori</label>
                  <select name="category" id="category" class="form-select">
                    <option value="laptop">Laptop</option>
                    <option value="service">Service</option>
                    <option value="sperpart">Sperpart</option>
                  </select>
                </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button class="btn btn-sm btn-primary" type="submit">Tambah</button>
          </div>
      </form>
  </div>
  </div>
</div>

<table class="table table-hover" id="data-laptops">
  <thead>
    <tr>
      <td>No</td>
      <td>Nama</td>
      <td>Harga</td>
      <td>Deskripsi</td>
      <td>Kategori</td>
      @foreach ($laptops as $laptop)
      <?php $photos = explode("|", $laptop->photo) ?>
        @for ($i = 0; $i < count($photos); $i++)
          <td>Gambar {{ $i + 1 }}</td>
        @endfor
      @endforeach
      <td>Aksi</td>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;?>
    @foreach ($laptops as $laptop)
    <tr>
      <td>{{$no}}</td>
      <td>{{$laptop->name}}</td>
      <td>Rp. {{number_format($laptop->price,0,',','.')}}</td>
      <td>{{$laptop->description}}</td>
      <td>{{$laptop->category}}</td>
      <?php $photos = explode("|", $laptop->photo) ?>
      @foreach ($photos as $photo)
      <td>
        <img src="/uploads/laptop_photo/{{$photo}}" width="120px" class="rounded" alt="laptop_photo" srcset="">
      </td>
      @endforeach
      <td>
        <a data-bs-toggle="modal" data-bs-target="#exampleModal{{$laptop->id}}" class="btn btn-sm btn-info color-white" href="/"> Ubah</a>
        <a class="btn btn-sm btn-danger color-white" href="/laptop/{{$laptop->id}}/delete"> Hapus</a>
      </td>
    </tr>
    <?php $no++; ?>
    <div class="modal fade" id="exampleModal{{$laptop->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="/laptop/update" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="mb-2">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" required value="{{$laptop->name}}">
                </div>
                <div class="mb-2">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" name="price" id="price" class="form-control" required value="{{$laptop->price}}">
                </div>
                <div class="mb-2">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" name="description" id="description" class="form-control" required value="{{$laptop->description}}">
                </div>
                <div class="mb-2">
                  <label for="is_available" class="form-label">Barang Tersedia</label>
                  <select class="form-select" name="is_available" id="is_available">
                    <option value="1">Tesedia</option>
                    <option value="0">Habis</option>
                  </select>
                </div>
                <div class="mb-2">
                  <label for="laptop_photo" class="form-label">Gambar</label>
                  <input type="file" name="laptop_photo[]" id="laptop_photo" multiple class="form-control">
                </div>
                <input type="hidden" name="laptop_id", value="{{$laptop->id}}">
                <div class="mb-2">
                    <label for="category" class="form-label">Kategori</label>
                    <select name="category" id="category" class="form-select">
                      <option {{$laptop->category == "laptop" ? "selected" : ""}} value="laptop">Laptop</option>
                      <option {{$laptop->category == "laptop" ? "service" : ""}} value="service">Service</option>
                      <option {{$laptop->category == "laptop" ? "sperpart" : ""}} value="sperpart">Sperpart</option>
                    </select>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-sm btn-primary" type="submit">Ubah</button>
            </div>
        </form>
      </div>
      </div>
  </div>
    @endforeach
  </tbody>
</table>

@endsection

@section('add_javascript')
<script>
  $(document).ready(function () {
      $('#data-laptops').DataTable();
  });
</script>
@endsection