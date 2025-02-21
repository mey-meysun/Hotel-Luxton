<x-layout>

  <div class="owl-carousel owl-hero">
    <div class="untree_co--site-hero overlay" style="background-image: url('{{ asset('images/slider_1.jpg') }}')">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="site-hero-contents text-center" data-aos="fade-up">
              <h1 class="hero-heading">Fasilitas LuxtonHotel</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section id="superior">
    <div class="container mt-4">
      <div class="row">
        @foreach ($facilities as $facility)
          <div class="col-md-4 mb-4">
            <div class="card border-0 rounded-3 p-4 shadow">
              <img src="{{ asset('storage/' . $facility->gambar) }}" class="card-img-top rounded" alt="{{ $facility->nama_fasilitas }}">
              <div class="card-body p-4">
                <p class="text-center">{{ $facility->nama_fasilitas }}</p>
                <p>{{ $facility->deskripsi }}</p>
                <a href="#" class="btn btn-primary rounded">Go somewhere</a>
              </div>
            </div>
          </div>
        @endforeach
      </div> 
    </div> 
  </section>

</x-layout>