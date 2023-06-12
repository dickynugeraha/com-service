@extends('layouts.admin_view', ["title" => "Customers"])
@section("content_admin")

<div class="row justify-content-center my-4">
  <div class="col-md-2">
    <a data-bs-toggle="modal" data-bs-target="#modalAddCustomer" href="#" class="fs-6 d-block text-decoration-none bg-color rounded color-white text-center py-2 fw-bold">
      Tambah customer
    </a>
  </div>
  <div class="col-md-2">
    <a class="fs-6 d-block text-decoration-none bg-color rounded color-white text-center py-2 fw-bold">
      Cetak
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
      <h5 class="modal-title" id="exampleModalLabel">Tambah customer</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/customer" method="post">
          <div class="modal-body">
              <div class="mb-2">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" name="name" id="name" class="form-control" required>
              </div>
              <div class="mb-2">
                  <label for="order_date" class="form-label">Tanggal order</label>
                  <input type="date" name="order_date" id="order_date" class="form-control" required>
              </div>
              <div class="mb-2">
                  <label for="address" class="form-label">Alamat</label>
                  <input type="text" name="address" id="address" class="form-control" required>
              </div>
              <div class="mb-2">
                  <label for="product" class="form-label">Produk</label>
                  <input type="text" name="product" id="product" class="form-control" required>
              </div>
              <div class="mb-2">
                  <label for="category" class="form-label">Kategori</label>
                  <input type="text" name="category" id="category" class="form-control" required>
              </div>
              <div class="mb-2">
                  <label for="price" class="form-label">Harga</label>
                  <input type="text" name="price" id="price" class="form-control" required>
              </div>
              <div class="mb-2">
                  <label for="payment_method" class="form-label">Metode Pembayaran</label>
                  <select name="payment_method" id="payment_method" class="form-select">
                    <option value="">--Pilih--</option>
                    <option value="transfer bank">Transfer bank</option>
                    <option value="dana">Dana</option>
                  </select>
              </div>
              <div class="mb-2">
                  <label for="status" class="form-label">Status</label>
                  <select name="status" id="status" class="form-select">
                    <option value="">--Pilih--</option>
                    <option value="proses">Proses</option>
                    <option value="pengiriman">Pengiriman</option>
                    <option value="diterima">Diterima</option>
                    <option value="batal">Batal</option>
                  </select>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button class="btn btn-sm btn-primary" type="submit">Add</button>
          </div>
      </form>
  </div>
  </div>
</div>

<table class="table table-hover" id="data-customers">
  <thead>
    <tr>
      <td>No</td>
      <td>Tanggal order</td>
      <td>Nama</td>
      <td>Alamat</td>
      <td>Kategori</td>
      <td>Harga</td>
      <td>Produk</td>
      <td>Metode Pembayaran</td>
      <td>Status</td>
      <td>Aksi</td>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;?>
    @foreach ($customers as $customer)
    <tr>
      <td>{{$no}}</td>
      <td>{{$customer->order_date}}</td>
      <td>{{$customer->name}}</td>
      <td>{{$customer->address}}</td>
      <td>{{$customer->category}}</td>
      <td>{{$customer->price}}</td>
      <td>{{$customer->products}}</td>
      <td>{{$customer->payment_method}}</td>
      <td>{{$customer->status}}</td>
      <td>
        <a data-bs-toggle="modal" data-bs-target="#exampleModal{{$customer->id}}" class="btn btn-sm btn-info color-white" href="/"> Ubah</a>
        <a class="btn btn-sm btn-danger color-white" href="/customer/{{$customer->id}}/delete"> Hapus</a>
        
      </td>
    </tr>
    <?php $no++; ?>
    <div class="modal fade" id="exampleModal{{$customer->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="/customer/update" method="post">
            <div class="modal-body">
                <div class="mb-2">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$customer->name}}" required>
                </div>
                <div class="mb-2">
                    <label for="order_date" class="form-label">Tanggal order</label>
                    <input type="date" name="order_date" id="order_date" class="form-control" value="{{$customer->order_date}}" required>
                </div>
                <div class="mb-2">
                    <label for="address" class="form-label">Alamat</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{$customer->address}}" required>
                </div>
                <div class="mb-2">
                    <label for="product" class="form-label">Produk</label>
                    <input type="text" name="product" id="product" class="form-control" value="{{$customer->product}}" required>
                </div>
                <div class="mb-2">
                    <label for="category" class="form-label">Kategori</label>
                    <input type="text" name="category" id="category" class="form-control" value="{{$customer->category}}" required>
                </div>
                <div class="mb-2">
                    <label for="price" class="form-label">Harga</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{$customer->price}}" required>
                </div>
                <div class="mb-2">
                    <label for="payment_method" class="form-label">Metode Pembayaran</label>
                    <select name="payment_method" id="payment_method" class="form-select">
                      <option value="">--Pilih--</option>
                      <option {{$customer->payment_method == "transfer bank" ? "selected" : ""}} value="transfer bank">Transfer bank</option>
                      <option {{$customer->payment_method == "dana" ? "selected" : ""}} value="dana">Dana</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select">
                      <option value="">--Pilih--</option>
                      <option {{$customer->status == "proses" ? "selected" : ""}}  value="proses">Proses</option>
                      <option {{$customer->status == "pengiriman" ? "selected" : ""}}  value="pengiriman">Pengiriman</option>
                      <option {{$customer->status == "diterima" ? "selected" : ""}}  value="diterima">Diterima</option>
                      <option {{$customer->status == "batal" ? "selected" : ""}}  value="batal">Batal</option>
                    </select>
                </div>
             <input type="hidden" name="customer_id" value="{{$customer->id}}">
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
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
      $('#data-customers').DataTable();
  });
</script>
@endsection