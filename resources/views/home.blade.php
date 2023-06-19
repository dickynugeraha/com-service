@extends('layouts.user_view') @section('content_user')
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
                    style="width: 200px"
                >
                    <p class="mb-0">
                        <i class="fa fa-bolt me-4" style="font-size: 3rem"></i>
                    </p>
                    <p class="mb-0">Layanan cepat</p>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-4">
                <div
                    class="d-flex align-items-center p-3 rounded layanan-item"
                    style="width: 200px"
                >
                    <p class="mb-0">
                        <i class="fa fa-money me-4" style="font-size: 3rem"></i>
                    </p>
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
                    <p class="mb-0">
                        <i
                            class="fa fa-user-secret me-4"
                            style="font-size: 3rem"
                        ></i>
                    </p>
                    <p class="mb-0">Privasi terjaga</p>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-4">
                <div
                    class="d-flex align-items-center p-3 rounded layanan-item"
                    style="width: 200px"
                >
                    <p class="mb-0">
                        <i
                            class="fa fa-retweet me-4"
                            style="font-size: 3rem"
                        ></i>
                    </p>
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
                    <p class="mb-0">
                        <i class="fa fa-users me-4" style="font-size: 3rem"></i>
                    </p>
                    <p class="mb-0">Mudah konsultasi</p>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-4">
                <div
                    class="d-flex align-items-center p-3 rounded layanan-item"
                    style="width: 200px"
                >
                    <p class="mb-0">
                        <i
                            class="fa fa-handshake-o me-4"
                            style="font-size: 3rem"
                        ></i>
                    </p>
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
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Minus et deleniti nesciunt sint eligendi
                            reprehenderit reiciendis, quibusdam illo, beatae
                            quia fugit consequatur laudantium velit magnam
                            error. Consectetur distinctio fugit doloremque.
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
            
        });
    </script>
@endsection