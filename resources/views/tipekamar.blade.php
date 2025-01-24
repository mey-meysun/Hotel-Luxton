<x-layout>
    <div class="owl-carousel owl-hero">

        <div class="untree_co--site-hero overlay" style="background-image: url({{ asset('assets/images/slider_2.jpg') }}">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-8">
                <div class="site-hero-contents text-center" data-aos="fade-up">
                  <h1 class="hero-heading">LuxtonHotel by Untree.co</h1>
                  <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Logout</button>
                    </form>
                    {{-- nitip dulu ya --}}
                  <div class="sub-text">
                    <p>Another free awesome templates for Hotels and any kind of website by <a href="https://untree.co/" target="_blank" class="text-white font-weight-bold">Untree.co</a>. See our <a href="https://untree.co/license/" class="text-white font-weight-bold">license page</a> for more usage details</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="untree_co--site-hero overlay"  style="background-image: url('public/images/slider_1.jpg')">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-7">
                <div class="site-hero-contents text-center" data-aos="fade-up">
                  <h1 class="hero-heading">Enjoy Your Stay</h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="untree_co--site-hero overlay" style="background-image: url({{ asset('assets/images/room_1_a.jpg') }}  'images/room_1_a.jpg')">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-10">
                <div class="site-hero-contents text-center" data-aos="fade-up">
                  <h1 class="hero-heading">Away from the Hustle and Bustle of City Life</h1>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    <section id="superior">
        <div class="card border-0 rounded-3 p-4" style="display: flex; align-items: center; width: 100rem; margin: 0 1rem;">
            <div class="login-box p-4 shadow">
              <img src="{{ asset('assets/images/room1.webp') }}" class="card-img-top rounded float-start" style="width: 250px; height: auto" alt="Superior Room">
               <!-- Product details-->
               <div class="card-body p-4">
                <p class="text-center">Kamar 1<b></b></p>
                <p>harga</p>
                <p>fasilitas</p>
                <p>berapa orang</p>
                <a class="nav-link active" aria-current="page" href="#"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
               </div>
            </div>

</x-layout>