<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.header_script')
        <title>{{ $title ?? "Laatansa" }}</title>
    </head>
    <body>
        <header
            style="background-color: white; border-bottom:1px solid #f1f1f1;"
            class="navbar sticky-top flex-md-nowrap p-0"
        >
            <a 
                class="navbar-brand col-md-3 col-lg-2 me-0 px-3 py-1" 
                href="#"
                style="background-color: white"
                >
                <img width="40px" height="40px" src="/assets/images/logo-navbar.png" alt="" srcset="">
                </a
            >
            <button
                class="navbar-toggler d-md-none collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu"
                aria-controls="sidebarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex">
                <div class="nav-item text-nowrap">
                    <p class="nav-link px-3 p-0 m-0">{{Session::get("adminName")}}</p>
                </div>
                <div class="nav-item text-nowrap">
                    <p class="nav-link px-3 p-0 m-0"><i class="fa fa-user-circle fs-5"></i></p>
                </div>
            </div>
        </header>
        <div class="container-fluid">
            <div class="row">
                @include('layouts.partials.header_admin')
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-color2">
                    @yield('content_admin')
                </main>
            </div>
        </div>
    </body>
    @yield('add_javascript') 
    @include('layouts.partials.footer_script')
</html>
