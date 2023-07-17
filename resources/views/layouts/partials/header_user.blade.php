<nav
    class="navbar navbar-expand-lg py-3"
    data-bs-theme="light"
    style="background-color: white; border-bottom: 1.5px solid #f1f1f1"
>
    <div class="container">
        <a
            class="fs-4 text-decoration-none"
            href="/"
            style="color: #ffc800; background-color: transparent"
        >
            <img
                width="50px"
                height="50px"
                src="/assets/images/logo-navbar.png"
                alt=""
                srcset=""
            />
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-3 {{ request()->route()->uri == "produk" ? "act btn btn-primary px-2 py-0 m-0" : ""}}">
                    <a class="{{ request()->route()->uri == "produk" ? "color-white" : ""}} nav-link fs-6 fw-bold" href="/produk"
                        >Produk</a
                    >
                </li>
                <li class="nav-item mx-3 {{ request()->route()->uri == "layanan" ? "act btn btn-primary px-2 py-0 m-0" : ""}}">
                    <a class="{{ request()->route()->uri == "layanan" ? "color-white" : ""}} nav-link fs-6 fw-bold" href="/layanan">Layanan</a>
                </li>
                <li class="nav-item mx-3 {{ request()->route()->uri == "laptop" ? "act btn btn-primary px-2 py-0 m-0" : ""}}">
                    <a class="{{ request()->route()->uri == "laptop" ? "color-white" : ""}} nav-link fs-6 fw-bold" href="/laptop">Laptop</a>
                </li>
                <li id="add-member" class="nav-item mx-3 {{ request()->route()->uri == "member" ? "act btn btn-primary px-2 py-0 m-0" : ""}}">
                    <a class="{{ request()->route()->uri == "member" ? "color-white" : ""}} nav-link fs-6 fw-bold" href="#">Member baru</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
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

<script>
      $(document).ready(function(){
            $("#add-member").on("click", function() {
                $("#modalNewMember").modal("show");
            });

            // $("#modalNewMember").modal("show");
            $("#daftarMember").on("click", function() {
                $("#modalNewMember").modal("hode");
            });

        });
</script>