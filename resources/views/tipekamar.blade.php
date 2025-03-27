<x-layout>
    <div class="owl-carousel owl-hero">
        <div class="untree_co--site-hero overlay"
            style="background-image: url({{ asset('assets/images/slider_2.jpg') }})">
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
            <div class="container mt-5 mb-5">
                <div class="card shadow p-4">
                    <h2 class="mb-3 text-center">Pencarian Kamar</h2>
                    <form action="{{ route('rooms.search') }}" method="GET">
                        <div class="row">
                            <!-- Tanggal Check-in -->
                            <div class="col-md-4 mb-3">
                                <label for="check_in">Tanggal Check-in</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
                                    <input type="date" name="check_in" class="form-control" value="{{ request('check_in') }}">
                                </div>
                            </div>
                    
                            <!-- Tanggal Check-out -->
                            <div class="col-md-4 mb-3">
                                <label for="check_out">Tanggal Check-out</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
                                    <input type="date" name="check_out" class="form-control" value="{{ request('check_out') }}">
                                </div>
                            </div>
                    
                            <!-- Tipe Kamar -->
                            <div class="col-md-4 mb-3">
                                <label for="tipe_kamar" class="form-label">Pilih Tipe Kamar</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-building"></i></span>
                                    <select name="tipe_kamar" id="tipe_kamar" class="form-control">
                                        <option value="">-- Pilih Tipe Kamar --</option>
                                        @foreach ($rooms->unique('tipe_kamar') as $room)
                                            <option value="{{ $room->tipe_kamar }}" {{ request('tipe_kamar') == $room->tipe_kamar ? 'selected' : '' }}>{{ $room->tipe_kamar }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                    
                            <!-- Rentang Harga -->
                            <div class="row align-items-center mb-3">
                                <label for="rentang_harga">Rentang Harga</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" name="harga_min" min="0" max="250000" value="{{ request('harga_min', 0) }}" step="50000" class="form-control">
                                    </div>
                                </div>
                                <div class="col-auto d-flex align-items-center px-1">
                                    <span>-</span>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" name="harga_max" min="0" max="1200000" value="{{ request('harga_max', 0) }}" step="50000" class="form-control">
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Tombol Submit & Reset -->
                            <div class="col-md-12 text-end">
                                <button type="submit" class="btn btn-secondary rounded">Cari Kamar</button>
                                <a href="{{ route('rooms.search') }}" class="btn btn-outline-secondary rounded">Reset</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                @foreach ($rooms as $room)
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 rounded-3 shadow h-100 d-flex flex-column">
                            <img src="{{ asset('storage/' . $room->gambar) }}" class="card-img-top rounded"
                                alt="{{ $room->tipe_kamar }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body p-4 d-flex flex-column">
                                <h3 class="card-title">{{ $room->tipe_kamar }}</h3>
                                <a href="{{ route('rooms.show', $room->id) }}"
                                    class="btn btn-sm btn-outline-secondary rounded mt-3 d-flex justify-content-center align-items-center">View
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
</x-layout>
