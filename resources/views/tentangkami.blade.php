<x-layout>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <link rel="stylesheet" href="{{ asset('assets/css/tentangkami.css') }}">
        <style>
            .navbar {
                padding: 0.5rem 1rem;
            }
            .tentang-kami {
                margin-top: 70px; /* Sesuaikan tinggi navbar */
            }
        </style>
    </head>

    <body class="tentang-kami">
        <div class="container mb-5">
            <div class="row col-lg-8 mx-auto p-3 shadow-lg profile-card">
            <h2>Tentang Hotel XYZ</h2>
            <p>
                Hotel XYZ menawarkan pengalaman menginap mewah dengan fasilitas modern dan pemandangan spektakuler. 
                Dengan lokasi strategis di pusat kota, kami menjamin kenyamanan dan pelayanan terbaik bagi setiap tamu.
            </p>
        </div>
    </div>
    
    
    <section class="container text-center my-5">
        <h2 class="fw-bold">Selamat Datang di Hotel XYZ</h2>
        <p class="lead">Hotel XYZ adalah destinasi sempurna untuk liburan dan perjalanan bisnis Anda.</p>
        <img src="https://source.unsplash.com/1000x500/?hotel,luxury" alt="Hotel" class="img-fluid rounded shadow-lg">
    </section>

    <section class="facilities container text-center my-5">
        <h2 class="fw-bold">Fasilitas & Layanan</h2>
        <div class="grid mt-3">
            <div class="card shadow-lg border-0">
                <img src="https://source.unsplash.com/400x300/?hotel,room" class="card-img-top" alt="Kamar Mewah">
                <div class="card-body">
                    <h5 class="card-title">Kamar Mewah</h5>
                    <p class="card-text">Nikmati pemandangan kota dari kamar modern kami.</p>
                </div>
            </div>
            <div class="card shadow-lg border-0">
                <img src="https://source.unsplash.com/400x300/?hotel,restaurant" class="card-img-top" alt="Restoran Eksklusif">
                <div class="card-body">
                    <h5 class="card-title">Restoran Eksklusif</h5>
                    <p class="card-text">Cicipi kuliner dari chef terbaik dunia.</p>
                </div>
            </div>
            <div class="card shadow-lg border-0">
                <img src="https://source.unsplash.com/400x300/?hotel,pool" class="card-img-top" alt="Kolam Renang & Spa">
                <div class="card-body">
                    <h5 class="card-title">Kolam Renang & Spa</h5>
                    <p class="card-text">Relaksasi dengan layanan spa dan kolam renang mewah.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery container text-center my-5">
        <h2 class="fw-bold">Galeri Hotel</h2>
        <div id="galleryCarousel" class="carousel slide shadow-lg" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/1000x500/?hotel,view" class="d-block w-100 rounded" alt="Hotel View">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1000x500/?hotel,lobby" class="d-block w-100 rounded" alt="Lobby Hotel">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1000x500/?hotel,gym" class="d-block w-100 rounded" alt="Gym Hotel">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="vision container text-center my-5">
        <h2 class="fw-bold">Visi & Misi</h2>
        <p class="lead">Kami berkomitmen memberikan pengalaman menginap yang nyaman dan berkualitas.</p>
    </section>

    <section class="contact container text-center my-5">
        <h2 class="fw-bold">Hubungi Kami</h2>
        <p>📍 <b>Alamat:</b> Jalan Merdeka No. 1, Jakarta</p>
        <p>📧 <b>Email:</b> info@hotelxyz.com</p>
        <p>📞 <b>Telepon:</b> +62 812-3456-7890</p>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</x-layout>
