<x-layout>
  <div class="owl-carousel owl-hero">
    <div class="untree_co--site-hero overlay" style="background-image: url({{ asset('assets/images/slider_2.jpg') }})">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8">
            <div class="site-hero-contents text-center" data-aos="fade-up">
              <h2 class="hero-heading">Tipe Kamar Yang Bisa Anda Pilih</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section id="superior">
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card border-0 rounded-3 p-4 shadow">
            <img src="{{ asset('assets/images/room1.webp') }}" class="card-img-top rounded" alt="Superior Room">
            <div class="card-body p-4">
              <p class="text-center">Kamar 1</p>
              <p>Harga</p>
              <p>Fasilitas</p>
              <p>Berapa orang</p>
              <a href="#" class="btn btn-sm btn-outline-secondary rounded">View</a>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-3">
        <div class="card shadow p-4">
          <h2 class="mb-3 text-center">Pencarian Kamar</h2>
          <form action="#" method="GET">
            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="checkin_date">Tanggal Check-in</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
                  <input type="date" id="checkin_date" class="form-control">
                </div>
              </div>
      
              <div class="col-md-4 mb-3">
                <label for="checkout_date">Tanggal Check-out</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
                  <input type="date" id="checkout_date" class="form-control">
                </div>
              </div>
      
              <div class="col-md-4 mb-3">
                <label for="night_count">Jumlah Malam</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-moon-stars"></i></span>
                  <select id="night_count" class="form-control">
                    @for ($i = 1; $i <= 30; $i++)
                      <option value="{{ $i }}">{{ $i }} Malam</option>
                    @endfor
                  </select>
                </div>
              </div>
      
              <div class="col-md-4 mb-3">
                <label for="room_type">Tipe Kamar</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-building"></i></span>
                  <select id="room_type" class="form-control">
                    <option value="">Pilih Tipe Kamar</option>
                    <option value="strandar">Strandar</option>
                    <option value="superior">Superior</option>
                    <option value="deluxe">Deluxe </option>
                    <option value="executive">Executive</option>
                  </select>
                </div>
              </div>
      
              <div class="col-md-4 mb-3">
                <label for="adults">Dewasa</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-person"></i></span>
                  <select id="adults" class="form-control">
                    @for ($i = 1; $i <= 10; $i++)
                      <option value="{{ $i }}">{{ $i }} Dewasa</option>
                    @endfor
                  </select>
                </div>
              </div>
      
              <div class="col-md-4 mb-3">
                <label for="children">Anak</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-people"></i></span>
                  <select id="children" class="form-control">
                    @for ($i = 0; $i <= 6; $i++)
                      <option value="{{ $i }}">{{ $i }} Anak</option>
                    @endfor
                  </select>
                </div>
              </div>
      
            <div class="row align-items-center">
              <label for="rentang harga">Rentang Harga</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-text">Rp</span>
      <input type="number" min="0" max="250000" value="250000" step="50000" class="form-control">
    </div>
  </div>
  <div class="col-auto d-flex align-items-center px-1">
    <span>-</span>
  </div> 
  <div class="col-md-4">  
    <div class="input-group">
      <span class="input-group-text">Rp</span>
      <input type="number" min="0" max="1200000" value="500000" step="50000" class="form-control">
    </div>
  </div>
</div>
              <div class="col-md-12 text-end">
                <button type="submit" class="btn btn-secondary rounded">Cari Kamar</button>
              </div>
            </div>
          </form>
        </div>
      </div>      
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const checkinInput = document.getElementById('checkin_date');
      const checkoutInput = document.getElementById('checkout_date');
      const nightCountSelect = document.getElementById('night_count');

      const today = new Date();
      const tomorrow = new Date();
      tomorrow.setDate(today.getDate() + 1);

      const formatDate = (date) => {
        const yyyy = date.getFullYear();
        const mm = String(date.getMonth() + 1).padStart(2, '0');
        const dd = String(date.getDate()).padStart(2, '0');
        return `${yyyy}-${mm}-${dd}`;
      };

      checkinInput.value = formatDate(today);
      checkoutInput.value = formatDate(tomorrow);
      nightCountSelect.value = "1";

      checkinInput.addEventListener('change', updateNightCount);
      checkoutInput.addEventListener('change', updateNightCount);

      function updateNightCount() {
        const checkinDate = new Date(checkinInput.value);
        const checkoutDate = new Date(checkoutInput.value);
        const diffTime = Math.max(checkoutDate - checkinDate, 0);
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
        nightCountSelect.value = diffDays > 0 ? diffDays : 1;
      }
    });
  </script>
</x-layout>
