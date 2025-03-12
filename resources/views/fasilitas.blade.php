<x-layout>

    <div class="untree_co--site-main">

        <div class="owl-carousel owl-hero">

            <div class="untree_co--site-hero overlay"
                style="background-image: url({{ asset('assets/images/slider_2.jpg') }}">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8">
                            <div class="site-hero-contents text-center" data-aos="fade-up">
                                <h1 class="hero-heading">Fasilitas Hotel</h1>
                                <div class="sub-text">
                                    <p><a
                                            href="https://untree.co/" target="_blank"
                                            class="text-white font-weight-bold"></a> <a
                                            href="https://untree.co/license/"
                                            class="text-white font-weight-bold"></a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="untree_co--site-hero overlay"
                style="background-image: url({{ asset('assets/images/slider_2.jpg') }}">
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

            <div class="untree_co--site-hero overlay"
                style="background-image: url({{ asset('assets/images/room_1_a.jpg') }}">
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

    <section id="facilities" class="py-5 bg-light">
        <div class="container px-3">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="fw-bold">Fasilitas Kami</h2>
                    <p class="text-muted">Nikmati berbagai fasilitas terbaik di LuxtonHotel untuk kenyamanan Anda.</p>
                </div>
            </div>
            <div class="row">
                @foreach ($facilities as $index => $facility)
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="{{ 200 + $index * 200 }}">
                        <div class="card border-0 rounded-3 shadow-sm overflow-hidden">
                            <img src="{{ asset('storage/' . $facility->gambar) }}" class="card-img-top"
                                alt="{{ $facility->nama_fasilitas }}">
                            <div class="card-body text-center">
                              <h3 class="card-title" style="color: #FF5733; font-weight: bold;">
                                {{ $facility->nama_fasilitas }}
                            </h3>                            
                                <p class="card-text" style="color: #6c757d;">{{ $facility->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
<style>
  .card img {
    width: 100%;  
    height: 200px;
    object-fit: cover; 
    border-radius: 10px; 
}
</style>
</x-layout>
