<!DOCTYPE html>
<html lang="en" >
    <head>
        @include('layouts.partials.header_script')
        <title>{{ $title ?? "Laatansa" }}</title>
    </head>
    <body style="overflow-x: hidden" class="bg-login">
      <script>
        let msg = '{{Session::get('alert')}}';
        let exist = '{{Session::has('alert')}}';
      
        if (exist){
          alert(msg);
        }
       </script>
      <div style="margin-top: 15rem">
      <div class="row justify-content-center align-items-center mx-3">
        <div class="col-lg-4 bg-color rounded " style="padding-left: 6rem; padding-right: 6rem; height: 16rem;">
              <div class="d-flex justify-content-center mb-3" style="margin-top: -4rem">
                <div class="d-flex align-items-center justify-content-center rounded-circle" style="background-color: white; width: 120px; height:120px;">
                  <img width="65%" height="65%" src="/assets/images/logo-navbar.png" alt="Logi" srcset="">
                </div>
              </div>
              <h4 class="text-center mb-3">LOGIN ADMIN</h4>
              <form action="/login" method="post">
                <div class="mb-2 d-flex">
                  <label for="email" class="form-label me-2"><i class="fa fa-user fs-3" style="color: black"></i></label>
                  <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="mb-2 d-flex">
                  <label for="password" class="form-label me-2"><i class="fa fa-key fs-5" style="color: black"></i></label>
                  <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="text-center">
                  <button type="submit" class="px-4 py-2 bg-color color-white rounded" style="border: none; margin-top: 4.5rem">Login</button>
                </div>
              </form>
        </div>
      </div>
      <div class="text-center mt-3">
      </div>
      </div>
    </div>
      
    </body>
    @include('layouts.partials.footer_script')
</html>