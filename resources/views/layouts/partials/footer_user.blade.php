<footer class="bg-color mx-auto p-4">
  <div class="container">
    <div class="row justify-content-center mb-3" style="border-bottom: 2px solid black">
      <div class="col-lg-4 col-md-6 ps-0">
        <p class="color-white fw-bold">Alamat</p>
        <p>Jl. Komjen Pol. M. Jasin - Kelapa Dua, Ruko Laatansa Comp No. 6 Tugu, Cimanggis, Depok</p>
        <p class="color-white fw-bold">Jam buka</p>
        <p>Setiap Hari | 08.00 - 21.00 WIB</p>
      </div>
      <div class="col-lg-4 col-md-6">
        <div id="google-map" class="mx-auto" style="width:70%; height: 80%;"></div>
      </div>
      <div class="col-lg-4 col-md-6 pe-0">
        <p class="color-white fw-bold">Kontak</p>
        <a href="https://wa.me/087882800165" target="blank" class="text-decoration-none" style="color:black">
          <div class="d-flex align-items-center mb-3">
            <i class="fs-3 me-3 color-white fa fa-whatsapp"></i>
            <p class="m-0 p-0"> 0878 8280 0165</p>
          </div>
        </a>
        <a href="https://www.instagram.com/tercipungcipung/" target="blank" class="text-decoration-none" style="color:black">
          <div class="d-flex align-items-center">
            <i class="fs-3 me-3 color-white fa fa-instagram"></i>
            <p class="m-0 p-0"> laatansacomp</p>
          </div>
        </a>
      </div>
    </div>
    <p class="text-center fw-bold">
      © 2023 Laatansa Comp
    </p>
  </div>
</footer>

<script>
      function initialize() {
        var mapOptions = {
          zoom: 13,
          center: new google.maps.LatLng(-6.421778, 106.813367),
          scrollwheel: false,
        };

        map = new google.maps.Map(
          document.getElementById("google-map"),
          mapOptions
        );

        google.maps.event.addDomListener(map, "idle", function () {
          calculateCenter();
        });

        google.maps.event.addDomListener(window, "resize", function () {
          map.setCenter(center);
        });
      }

      function calculateCenter() {
        center = map.getCenter();
      }

      function loadGoogleMap() {
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.src =
          "https://maps.googleapis.com/maps/api/js?key=AIzaSyDVWt4rJfibfsEDvcuaChUaZRS5NXey1Cs&v=3.exp&sensor=false&" +
          "callback=initialize";
        document.body.appendChild(script);
      }
      $(document).ready(function () {
        loadGoogleMap();
      })
</script>