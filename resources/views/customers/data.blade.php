<!DOCTYPE html>
<html lang="en" >
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

      <style>
      #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        
        #customers tr:hover {background-color: #ddd;}
        
        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #ffbf03;
          color: white;
        }
        </style>

      <title>Cetak PDF</title>
    </head>
    <body>
      <div class="row justify-content-center align-items-center" style="min-height: 95vh">
        <h5 class="mb-3 text-center">LAPORAN PEMBELIAN</h5>
        <table id="customers" class="table table-bordered" border="1">
            <tr style="font-weight: bold; font-size:0.9rem">
              <td>No</td>
              <td>Tanggal order</td>
              <td>Nama</td>
              <td>Alamat</td>
              <td>Kategori</td>
              <td>Produk</td>
              <td>Metode Pembayaran</td>
              <td>Status</td>
              <td style="width: 7rem">Harga</td>
            </tr>
         
            <?php $no = 1;?>
            @foreach ($data["customers"] as $customer)
            <tr style="font-weight: light; font-size:0.8rem">
              <td>{{$no}}</td>
              <td>{{$customer->order_date}}</td>
              <td>{{$customer->name}}</td>
              <td>{{$customer->address}}</td>
              <td>{{$customer->category}}</td>
              <td>{{$customer->product}}</td>
              <td>{{$customer->payment_method}}</td>
              <td>{{$customer->status}}</td>
              <td>Rp. {{number_format($customer->price,0,',','.')}}</td>
            </tr>
            <?php $no++; ?>
             @endforeach
            <tr style="font-size: 0.8rem">
              <td colspan="7">Total pendapatan</td>
              <td colspan="2" class="text-end">Rp. {{number_format($data["totalIncome"],0,',','.')}}</td>
            </tr>
        </table>
      </div>
    </body>
</html>