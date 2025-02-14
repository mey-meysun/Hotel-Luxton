<x-layout>
  <div class="owl-carousel owl-hero">
    <div class="untree_co--site-hero overlay" style="background-image: url('public/images/slider_1.jpg')">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="site-hero-contents text-center" data-aos="fade-up">
              <h1 class="hero-heading">Silahkan Cari Kamar Yang Cocok Untuk Anda</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="card p-4 shadow">
      <h4 class="mb-4 text-center">Tipe Kamar</h4>
      <form>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="checkin" class="form-label">Check-In</label>
            <input type="date" id="checkin" class="form-control">
          </div>
          <div class="col-md-6 mb-3">
            <label for="checkout" class="form-label">Check-Out</label>
            <input type="date" id="checkout" class="form-control">
          </div>
        </div>
        <div class="mb-4">
          <label for="guests" class="form-label">Tamu dan Kamar</label>
          <select id="guests" class="form-select">
            <option>
              
            </option>
            <option>1 Dewasa, 0 Anak, 1 Kamar</option>
            <option>2 Dewasa, 1 Anak, 1 Kamar</option>
          </select>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary w-100 py-2 rounded-pill">Pilih Kamar</button>
        </div>
      </form>
    </div>
  </div>
</x-layout>