@extends('layouts.admin_view', ["title" => "Produk"])
@section("content_admin")

<div class="row justify-content-center my-4">
  <div class="col-md-2">
    <a data-bs-toggle="modal" data-bs-target="#modalAddCustomer" href="#" class="fs-6 d-block text-decoration-none bg-color rounded color-white text-center py-2 fw-bold">
      Tambah produk
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
 <div class="modal fade" id="modalAddCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Tambah produk</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/product" method="post" enctype="multipart/form-data">
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
                  <label for="product_photo" class="form-label">Gambar</label>
                  <input type="file" name="product_photo" id="product_photo" class="form-control" required>
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

<table class="table table-hover" id="data-products">
  <thead>
    <tr>
      <td>No</td>
      <td>Nama</td>
      <td>Harga</td>
      <td>Deskripsi</td>
      <td>Gambar</td>
      <td>Aksi</td>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;?>
    @foreach ($products as $product)
    <tr>
      <td>{{$no}}</td>
      <td>{{$product->name}}</td>
      <td>Rp. {{number_format($product->price,0,',','.')}}</td>
      <td>{{$product->description}}</td>
      <td>
        <img src="/uploads/product_photo/{{$product->photo}}" width="120px" class="rounded" alt="" srcset="">
      </td>
      <td>
        <a data-bs-toggle="modal" data-bs-target="#exampleModal{{$product->id}}" class="btn btn-sm btn-info color-white" href="/"> Ubah</a>
        <a class="btn btn-sm btn-danger color-white" href="/product/{{$product->id}}/delete"> Hapus</a>
        
      </td>
    </tr>
    <?php $no++; ?>
    <div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="/product/update" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="mb-2">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" required value="{{$product->name}}">
                </div>
                <div class="mb-2">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" name="price" id="price" class="form-control" required value="{{$product->price}}">
                </div>
                <div class="mb-2">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" name="description" id="description" class="form-control" required value="{{$product->description}}">
                </div>
                <div class="mb-2">
                    <label for="is_available" class="form-label">Barang Tersedia</label>
                    <select class="form-select" name="is_available" id="is_available">
                      <option value="1">Tesedia</option>
                      <option value="0">Habis</option>
                    </select>
                  </div>
                <div class="mb-2">
                    <label for="product_photo" class="form-label">Gambar</label>
                    <input type="file" name="product_photo" id="product_photo" class="form-control">
                </div>
                <input type="hidden" name="product_id" value="{{$product->id}}">
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
      $('#data-products').DataTable();
  });
</script>
@endsection