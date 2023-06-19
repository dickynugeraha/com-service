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
            </ul>
        </div>
    </div>
</nav>
