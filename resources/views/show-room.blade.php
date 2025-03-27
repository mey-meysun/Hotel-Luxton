<x-layout>
    <div class="owl-carousel owl-hero">
        <div class="untree_co--site-hero overlay"
            style="background-image: url({{ asset('assets/images/slider_2.jpg') }})">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8">
                        <div class="site-hero-contents text-center" data-aos="fade-up">
                            <h2 class="hero-heading">Detail dan Reservasi Kamar</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow rounded p-4">
                    <div class="row">
                        <!-- Gambar Kamar -->
                        <div class="col-md-6">
                            <img src="{{ asset('storage/' . $room->gambar) }}" class="card-img-top rounded"
                                alt="{{ $room->tipe_kamar }}" style="height: 100%; object-fit: cover;">
                        </div>

                        <!-- Detail Kamar -->
                        <div class="col-md-6 d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="card-title">{{ $room->tipe_kamar }}</h3>
                                <hr>
                                <p><strong>Harga:</strong> Rp{{ number_format($room->harga_kamar, 0, ',', '.') }}</p>
                                <p><strong>Deskripsi:</strong> {{ $room->deskripsi_kamar }}</p>
                            </div>

                            <div class="d-flex flex-column align-items-center mt-3">
                                <div class="d-flex justify-content-between w-100">
                                    <a href="{{ route('rooms.index') }}"
                                        class="btn btn-secondary d-flex align-items-center rounded-pill px-4">
                                        Kembali
                                    </a>
                                    <a href="{{ route('reservations.create', $room->id) }}"
                                        class="btn btn-primary rounded-pill px-4 d-flex align-items-center">
                                        Reservasi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
