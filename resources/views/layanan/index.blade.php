@extends('layouts.admin_view', ["title" => "Layanan"])
@section("content_admin")

<div class="row justify-content-center my-4">
  <div class="col-md-2">
    <a data-bs-toggle="modal" data-bs-target="#modalAddLayanan" href="#" class="fs-6 d-block text-decoration-none bg-color rounded color-white text-center py-2 fw-bold">
      Tambah layanan
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
 <div class="modal fade" id="modalAddLayanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Tambah layanan</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/layanan" method="post" enctype="multipart/form-data">
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
                  <label for="layanan_photo" class="form-label">Gambar</label>
                  <input type="file" name="layanan_photo" id="layanan_photo" class="form-control" required>
              </div>
              <div class="mb-2">
                  <label for="category" class="form-label">Kategori</label>
                  <select name="category" id="category" class="form-select">
                    <option value="pengetikan">Pengetikan</option>
                    <option value="percetakan">Percetakan / Printing</option>
                    <option value="penjilidan"><Param></Param>enjilidan</option>
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

<table class="table table-hover" id="data-layanan">
  <thead>
    <tr>
      <td>No</td>
      <td>Nama</td>
      <td>Harga</td>
      <td>Deskripsi</td>
      <td>Kategori</td>
      <td>Gambar</td>
      <td>Aksi</td>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;?>
    @foreach ($layanans as $layanan)
    <tr>
      <td>{{$no}}</td>
      <td>{{$layanan->name}}</td>
      <td>Rp. {{number_format($layanan->price,0,',','.')}}</td>
      <td>{{$layanan->description}}</td>
      <td>{{$layanan->category}}</td>
      <td>
        <img src="/uploads/layanan_photo/{{$layanan->photo}}" width="120px" class="rounded" alt="" srcset="">
      </td>
      <td>
        <a data-bs-toggle="modal" data-bs-target="#exampleModal{{$layanan->id}}" class="btn btn-sm btn-info color-white" href="/"> Ubah</a>
        <a class="btn btn-sm btn-danger color-white" href="/layanan/{{$layanan->id}}/delete"> Hapus</a>
      </td>
    </tr>
    <?php $no++; ?>
    <div class="modal fade" id="exampleModal{{$layanan->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="/layanan/update" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="mb-2">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" required value="{{$layanan->name}}">
                </div>
                <div class="mb-2">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" name="price" id="price" class="form-control" required value="{{$layanan->price}}">
                </div>
                <div class="mb-2">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" name="description" id="description" class="form-control" required value="{{$layanan->description}}">
                </div>
                <div class="mb-2">
                  <label for="is_available" class="form-label">Layanan Tersedia</label>
                  <select class="form-select" name="is_available" id="is_available">
                    <option value="1">Tesedia</option>
                    <option value="0">Habis</option>
                  </select>
                </div>
                <div class="mb-2">
                    <label for="layanan_photo" class="form-label">Gambar</label>
                    <input type="file" name="layanan_photo" id="layanan_photo" class="form-control" >
                </div>
                <input type="hidden" name="laptop_id", value="{{$layanan->id}}">
                <div class="mb-2">
                    <label for="category" class="form-label">Kategori</label>
                    <select name="category" id="category" class="form-select">
                      <option {{$layanan->category == "layanan" ? "pengetikan" : ""}} value="layanan">Pengetikan</option>
                      <option {{$layanan->category == "layanan" ? "percetakan" : ""}} value="service">Percetakan</option>
                      <option {{$layanan->category == "layanan" ? "penjilidan" : ""}} value="sperpart">Penjilidan</option>
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
      $('#data-layanan').DataTable();
  });
</script>
@endsection