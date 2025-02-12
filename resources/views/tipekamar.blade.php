<x-layout>
  <link href="{{ asset('assets/css/profil.css') }}" rel="stylesheet">
    <div class="owl-carousel owl-hero">

        <div class="untree_co--site-hero overlay" style="background-image: url({{ asset('assets/images/slider_2.jpg') }}">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-8">
                <div class="site-hero-contents text-center" data-aos="fade-up">
                  <h2 class="hero-heading">Tipe Kamar Yang Bisa Anda Pilih</h1>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="room-container">
        <div class="room-image">
            <img src="{{ asset('assets/images/room_2_b.jpg') }}" alt="Standard Room">
            <button class="prev">&#8592;</button>
            <button class="next">&#8594;</button>
        </div>
        <div class="room-details">
            <h2>Kamar #101 - Standard Room</h2>
            <p class="price">Harga: <span>$99</span> /malam</p>
            <p class="status">Status: <span class="tersedia">Tersedia</span></p>
            
            <h3>Deskripsi Kamar</h3>
            <ul class="room-description">
                <li>Ukuran: 25 m²</li>
                <li>Fasilitas: Smart TV, Wi-Fi, AC</li>
                <li>Kamar Mandi: Shower, Perlengkapan Mandi Gratis</li>
                <li>Sarapan: Termasuk</li>
            </ul>

            <button class="book-now">BOOK NOW →</button>
        </div>
    </div>

</x-layout>