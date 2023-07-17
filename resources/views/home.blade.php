@extends('layouts.user_view') @section('content_user')
<script>
    let msg = '{{Session::get('alert')}}';
    let exist = '{{Session::has('alert')}}';
  
    if (exist){
      alert(msg);
    }
</script>
<div class="modal fade" id="modalNewMember" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" >
    <div class="modal-content p-4" style="background-color: #ffbf03; border: none;">
        <div class="p-3 text-center">
                <p class="modal-title fw-bold" id="exampleModalLabel">Yuk daftar jadi member untuk mendapatkan</p>
                <p style="color: red" class="fw-bold mb-0 pb-0">informasi promo dan diskon lainnya</p>
        </div>
        <form action="/member" method="post" style="padding-left: 3rem; padding-right: 3rem;">
              <div class="mb-2 d-flex align-items-center">
                  <label for="name" style="width: 7rem; color:black; font-style:normal" class="form-label fw-bold">Nama</label>
                  <input type="text" name="name" id="name" class="form-control" required >
              </div>
              <div class="mb-2 d-flex align-items-center">
                  <label for="phone" style="width: 7rem; color:black; font-style:normal" class="form-label fw-bold">No Telp</label>
                  <input type="number" name="phone" id="phone" class="form-control" required >
              </div>
              <div class="mb-4 d-flex align-items-center">
                  <label for="email" style="width: 7rem; color:black; font-style:normal" class="form-label fw-bold">Email</label>
                  <input type="email" name="email" id="email" class="form-control" required >
              </div>
              <div class="text-center">
                  <button class="btn btn-sm btn-light fw-bold" style="width: 10rem" id="daftarMember" type="submit">DAFTAR</button>

              </div>
      </form>
    </div>
    </div>
</div>

<section
    id="carouselExampleIndicators"
    class="carousel slide mb-5"
    data-bs-ride="carousel"
>
    <div class="carousel-indicators">
        <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
        ></button>
        <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
        ></button>
        <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
        ></button>
        <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="3"
            aria-label="Slide 4"
        ></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img
                src="assets/images/banner1.png"
                class="d-block w-100"
                alt="gambar-banner"
            />
        </div>
        <div class="carousel-item">
            <img
                src="assets/images/banner2.png"
                class="d-block w-100"
                alt="gambar-banner"
            />
        </div>
        <div class="carousel-item">
            <img
                src="assets/images/banner3.png"
                class="d-block w-100"
                alt="gambar-banner"
            />
        </div>
        <div class="carousel-item">
            <img
                src="assets/images/banner4.png"
                class="d-block w-100"
                alt="gambar-banner"
            />
        </div>
    </div>
    <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
    >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
    >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>

<section class="my-4" id="alasan-pilih-kami">
    <h1 class="fw-bold text-center my-5">ALASAN PILIH KAMI</h1>
    <div
        class="row align-items-center justify-content-center"
        style="width: 98%"
    >
        <div class="col-lg-4 col-sm-6">
            <div class="d-flex justify-content-center mb-4">
                <div
                    class="d-flex align-items-center p-3 rounded layanan-item"
                >
                    {{-- <i class="fa fa-bolt me-4" style="font-size: 3rem"></i> --}}
                    <img src="assets/images/alasan-cepat.png" width="50px" height="50px" class="rounded-circle me-3" alt="" srcset="">
                    <p class="mb-0">Layanan cepat</p>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-4">
                <div
                    class="d-flex align-items-center p-3 rounded layanan-item"
                >
                        {{-- <i class="fa fa-money me-4" style="font-size: 3rem"></i> --}}
                    <img src="assets/images/alasan-murah.png" width="50px" height="50px" class="rounded-circle me-3" alt="" srcset="">
                        
                    <p class="mb-0">Dijamin murah</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="d-flex justify-content-center mb-4">
                <div
                    class="d-flex align-items-center p-3 rounded layanan-item"
                    style="width: 200px"
                >
                        {{-- <i
                            class="fa fa-user-secret me-4"
                            style="font-size: 3rem"
                        ></i> --}}
                    <img src="assets/images/alasan-privasi.png" width="50px" height="50px" class="rounded-circle me-3" alt="" srcset="">

                    <p class="mb-0">Privasi terjaga</p>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-4">
                <div
                    class="d-flex align-items-center p-3 rounded layanan-item"
                    style="width: 200px"
                >
               
                        {{-- <i
                            class="fa fa-retweet me-4"
                            style="font-size: 3rem"
                        ></i> --}}
                    <img src="assets/images/alasan-garansi.png" width="50px" height="50px" class="rounded-circle me-3" alt="" srcset="">

              
                    <p class="mb-0">Bergaransi</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="d-flex justify-content-center mb-4">
                <div
                    class="d-flex align-items-center p-3 rounded layanan-item"
                    style="width: 200px"
                >
                    {{-- <p class="mb-0"> --}}
                        {{-- <i class="fa fa-users me-4" style="font-size: 3rem"></i> --}}
                    <img src="assets/images/alasan-konsultasi.png" width="50px" height="50px" class="rounded-circle me-3" alt="" srcset="">

                    {{-- </p> --}}
                    <p class="mb-0">Mudah konsultasi</p>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-4">
                <div
                    class="d-flex align-items-center p-3 rounded layanan-item"
                    style="width: 200px"
                >
                    {{-- <p class="mb-0">
                        <i
                            class="fa fa-handshake-o me-4"
                            style="font-size: 3rem"
                        ></i>
                    </p> --}}
                    <img src="assets/images/alasan-transaksi.png" width="50px" height="50px" class="rounded-circle me-3" alt="" srcset="">

                    <p class="mb-0">Transaksi terjamin</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-4" id="layanan-kami">
    <h1 class="text-center my-5 fw-bold">LAYANAN KAMI</h1>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-4 col-md-6">
                <div class="card card-layanan mb-3 mx-auto">
                    <img
                        class="card-img-top"
                        height="200px"
                        src="assets/images/produkcard.jpg"
                        alt="Card image cap"
                    />
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Produk</h5>
                        <p class="card-text" style="color:grey">
                            Kami menawarkan berbagai produk ATK (Alat Tulis
                            Kantor) seperti pulpen, pensil, buku, map dan
                            amplop.
                        </p>
                        <a href="/produk" class="btn btn-dark btn-sm"
                            >Lihat produk</a
                        >
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-layanan mb-3 mx-auto">
                    <img
                        class="card-img-top"
                        height="200px"
                        src="assets/images/layanancard.jpg"
                        alt="Card image cap"
                    />
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Layanan</h5>
                        <p class="card-text" style="color:grey">
                            Kami memberikan layanan pengetikan dan percetakan untuk membantu memenuhi kebutuhan Anda.
                        </p>
                        <a href="/layanan" class="btn btn-dark btn-sm"
                            >Lihat layanan</a
                        >
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-layanan mb-3 mx-auto">
                    <img
                        class="card-img-top"
                        height="200px"
                        src="assets/images/laptopcard.png"
                        alt="Card image cap"
                    />
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Laptop</h5>
                        <p class="card-text" style="color:grey">
                            Kami menyediakan layanan untuk solusi lengkap kebutuhan laptop Anda, jual beli, service dan sparepart laptop.
                        </p>
                        <a href="/laptop" class="btn btn-dark btn-sm"
                            >Lihat laptop</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-4" id="testimony">
    <h1 class="text-center my-5 fw-bold">TESTIMONI</h1>
    <div
        id="carouselExampleControls"
        class="carousel slide text-center carousel-dark"
        data-ride="carousel"
    >
        <div class="carousel-indicators">
            <button
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
            ></button>
            @for ($i = 1; $i < count($testimonies) + 1; $i++)
            <button
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide-to="{{$i}}"
                class="active"
                aria-current="true"
                aria-label="Slide {{$i + 1}}"
            ></button>
            @endfor
           
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active mb-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8" style="min-height: 12rem">
                        <p class="fs-5 fst-italic" style="color:grey">
                            <i class="fa fa-quote-left pe-2"></i>
                            Pelayanan sangat baik, barang berkualitas dan banyak variant, response WA sangat cepat dan harga yang ditawarkan cenderung relevan.
                            <i class="fa fa-quote-right ps-2"></i>
                        </p>
                        <h1 class="fs-3 mb-3">Kale Pramono</h1>
                    </div>
                </div>
            </div>
            @foreach ($testimonies as $testimony)
            <div class="carousel-item mb-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8" style="min-height: 12rem">
                        <p class="fs-5 fst-italic" style="color:grey">
                            <i class="fa fa-quote-left pe-2"></i>
                            {{$testimony->description}}
                            <i class="fa fa-quote-right ps-2"></i>
                        </p>
                        <h1 class="fs-3 mb-3">{{$testimony->name}}</h1>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section id="faq" class="my-4">
    <h1 class="text-center my-5 fw-bold">FAQ</h1>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mx-3" style="height:60vh"> 
            <div class="col-lg-9 rounded p-4" style="background-color: #f1f1f1">
                <div style="border-bottom: 1px solid #d1d1d1;" class="mb-3">
                    <div class="d-flex" id="definition">
                        <p class="fs-6"><i class="fa fa-plus me-2" style="color: grey"></i> Apa itu laatansa comp?</p>
                    </div>
                    <p class="ms-4 definition" style="display: none; color:grey">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci dignissimos nam esse quas deleniti incidunt officia iure voluptate eaque itaque quibusdam minus non sunt nostrum commodi, ullam laudantium. Accusantium, nesciunt.</p>
                </div>
                <div style="border-bottom: 1px solid #d1d1d1;" class="mb-3">
                    <div class="d-flex" id="consultant">
                        <p class="fs-6"><i class="fa fa-plus me-2" style="color: grey"></i> Dimana saya dapat konsultasi?</p>
                    </div>
                    <p class="ms-4 consultant" style="display: none; color:grey">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci dignissimos nam esse quas deleniti incidunt officia iure voluptate eaque itaque quibusdam minus non sunt nostrum commodi, ullam laudantium. Accusantium, nesciunt.</p>
                </div>
                <div style="border-bottom: 1px solid #d1d1d1;"">
                    <div class="d-flex" id="service">
                        <p class="fs-6"><i class="fa fa-plus me-2" style="color: grey"></i> Apakah terjamin semua produk dan layanannya?</p>
                    </div>
                    <p class="ms-4 service" style="display: none; color:grey">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci dignissimos nam esse quas deleniti incidunt officia iure voluptate eaque itaque quibusdam minus non sunt nostrum commodi, ullam laudantium. Accusantium, nesciunt.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('add_javascript')
    <script>
        $(document).ready(function(){
            $("#definition").click(function(){
                $("p.definition").toggle(300);
            });
            $("#consultant").click(function(){
                $("p.consultant").toggle(300);
            });
            $("#service").click(function(){
                $("p.service").toggle(300);
            });
            
            $("#modalNewMember").modal("show");
            $("#daftarMember").on("click", function(params) {
                $("#modalNewMember").modal("hode");
            });

        });
    </script>
@endsection