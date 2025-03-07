<x-layout>

  <div class="owl-carousel owl-hero">
    <div class="untree_co--site-hero overlay" style="background-image: url('{{ asset('images/slider_1.jpg') }}');">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="site-hero-contents text-center" data-aos="fade-down" data-aos-duration="1000">
              <h1 class="hero-heading">Fasilitas LuxtonHotel</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section id="facilities" class="py-5 bg-light">
    <div class="container px-3">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
          <h2 class="fw-bold">Fasilitas Kami</h2>
          <p class="text-muted">Nikmati berbagai fasilitas terbaik di LuxtonHotel untuk kenyamanan Anda.</p>
        </div>
      </div>
      <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card border-0 rounded-3 shadow-sm overflow-hidden">
            <img src="{{ asset('assets/images/gym.jpg') }}" class="card-img-top" alt="Gym">
            <div class="card-body text-center">
              <h5 class="card-title text-primary">Gym</h5>
              <p class="card-text">Fasilitas gym dengan peralatan lengkap untuk tamu hotel.</p>
              <a href="#" class="btn btn-outline-primary">Selengkapnya</a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
          <div class="card border-0 rounded-3 shadow-sm overflow-hidden">
            <img src="{{ asset('assets/images/swim.jpg') }}" class="card-img-top" alt="Kolam Renang">
            <div class="card-body text-center">
              <h5 class="card-title text-primary">Kolam Renang</h5>
              <p class="card-text">Berenang dengan pemandangan indah dan air yang jernih.</p>
              <a href="#" class="btn btn-outline-primary">Selengkapnya</a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="600">
          <div class="card border-0 rounded-3 shadow-sm overflow-hidden">
            <img src="{{ asset('assets/images/spa.jpeg') }}" class="card-img-top" alt="Spa & Relax">
            <div class="card-body text-center">
              <h5 class="card-title text-primary">Spa & Relax</h5>
              <p class="card-text">Nikmati layanan spa eksklusif untuk relaksasi tubuh dan pikiran.</p>
              <a href="#" class="btn btn-outline-primary">Selengkapnya</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

</x-layout>