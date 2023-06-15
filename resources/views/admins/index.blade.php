@extends('layouts.admin_view', ["title" => "Admin"])
@section("content_admin")

<div class="row justify-content-center my-4">
  <div class="col-md-2">
    <a data-bs-toggle="modal" data-bs-target="#modalAddAdmin" href="#" class="fs-6 d-block text-decoration-none bg-color rounded color-white text-center py-2 fw-bold">
      Tambah admin
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
 <div class="modal fade" id="modalAddAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Tambah admin</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/admin" method="post" enctype="multipart/form-data">
          <div class="modal-body">
              <div class="mb-2">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" name="name" id="name" class="form-control" required>
              </div>
              <div class="mb-2">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" id="email" class="form-control" required>
              </div>
              <div class="mb-2">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" id="password" class="form-control" required>
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
      <td>Email</td>
      <td>Aksi</td>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;?>
    @foreach ($admins as $admin)
    <tr>
      <td>{{$no}}</td>
      <td>{{$admin->name}}</td>
      <td>{{$admin->email}}</td>
      <td>
        <a data-bs-toggle="modal" data-bs-target="#exampleModal{{$admin->id}}" class="btn btn-sm btn-info color-white" href="/"> Ubah</a>
        <a class="btn btn-sm btn-danger color-white" href="/admin/{{$admin->id}}/delete"> Hapus</a>
      </td>
    </tr>
    <?php $no++; ?>
    <div class="modal fade" id="exampleModal{{$admin->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah admin</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="/admin/upload" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="mb-2">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$admin->name}}" required>
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{$admin->email}}" required>
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
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