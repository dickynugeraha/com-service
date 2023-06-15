@extends('layouts.admin_view', ["title" => "Layanan"])
@section("content_admin")

<h3 class="my-4 text-center">TESTIMONI</h3>

<script>
  let msg = '{{Session::get('alert')}}';
  let exist = '{{Session::has('alert')}}';

  if (exist){
    alert(msg);
  }
 </script>
<table class="table table-hover" id="data-testimonies">
  <thead>
    <tr>
      <td>No</td>
      <td>Nama</td>
      <td>Deskripsi</td>
      <td>Kategori</td>
      <td>Tampil di dashboard</td>
      <td>Aksi</td>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;?>
    @foreach ($testimonies as $testimony)
    <tr>
      <td>{{$no}}</td>
      <td>{{$testimony->name}}</td>
      <td>{{$testimony->description}}</td>
      <td>{{$testimony->category}}</td>
      <td>{{$testimony->is_show_dashboard == 1 ? "Tampil" : "Hide"}}</td>
      <td>
        <a data-bs-toggle="modal" data-bs-target="#exampleModal{{$testimony->id}}" class="btn btn-sm btn-info color-white" href="/"> Ubah</a>
        <a class="btn btn-sm btn-danger color-white" href="/testimony/{{$testimony->id}}/delete"> Hapus</a>
      </td>
    </tr>
    <?php $no++; ?>
    <div class="modal fade" id="exampleModal{{$layanan->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah testimony</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="/testimony/update" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="mb-2">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" required value="{{$testimony->name}}">
                </div>
                <div class="mb-2">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" name="description" id="description" class="form-control" required value="{{$testimony->description}}">
                </div>
                <div class="mb-2">
                    <label for="category" class="form-label">Kategori</label>
                    <input type="text" name="category" id="category" class="form-control" required value="{{$testimony->category}}">
                </div>
                <div class="mb-2">
                  <label for="is_show_dashboard" class="form-label">Tampil di dashboard</label>
                  <select class="form-select" name="is_show_dashboard" id="is_show_dashboard">
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                  </select>
                </div>
             
                <input type="hidden" name="testimony_id", value="{{$testimony->id}}">
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
      $('#data-testimonies').DataTable();
  });
</script>
@endsection