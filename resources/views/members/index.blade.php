@extends('layouts.admin_view', ["title" => "Produk"])
@section("content_admin")

<script>
  let msg = '{{Session::get('alert')}}';
  let exist = '{{Session::has('alert')}}';

  if (exist){
    alert(msg);
  }
 </script>
<h3 class="my-4 text-center">MEMBERS</h3>

<table class="table table-hover" id="data-members">
  <thead>
    <tr>
      <td>No</td>
      <td>Nama</td>
      <td>Email</td>
      <td>No Hp</td>
      <td>Aksi</td>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;?>
    @foreach ($members as $member)
    <tr>
      <td>{{$no}}</td>
      <td>{{$member->name}}</td>
      <td>{{$member->email}}</td>
      <td>{{$member->phone}}</td>
   
      <td>
        <a data-bs-toggle="modal" data-bs-target="#exampleModal{{$member->id}}" class="btn btn-sm btn-info color-white" href="/"> Ubah</a>
        <a class="btn btn-sm btn-danger color-white" href="/member/{{$member->id}}/delete"> Hapus</a>
      </td>
    </tr>
    <?php $no++; ?>
    <div class="modal fade" id="exampleModal{{$member->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="/member/update" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="mb-2">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" required value="{{$member->name}}">
                </div>
                <div class="mb-2">
                    <label for="phone" class="form-label">No Hp</label>
                    <input type="number" name="phone" id="phone" class="form-control" required value="{{$member->phone}}">
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Deskripsi</label>
                    <input type="email" name="email" id="email" class="form-control" required value="{{$member->email}}">
                </div>
                <input type="hidden" name="member_id" value="{{$member->id}}">
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
      $('#data-members').DataTable();
  });
</script>
@endsection