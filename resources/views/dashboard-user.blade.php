<x-layout>
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">
    <div class="container mt-5">
        <h1 class="text-center mb-4">
            <i class="fa-solid fa-calendar-check me-2"></i>Dashboard Reservasi
        </h1>

        {{-- Pesan Sukses --}}
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-circle-check me-2"></i> Reservasi berhasil disimpan! (contoh placeholder)
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        {{-- Kartu Daftar Reservasi --}}
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    <i class="fa-solid fa-list me-2"></i>Daftar Reservasi
                </h5>
            </div>
            <div class="card-body">
                {{-- Tabel Reservasi --}}
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                                <th><i class="fa-solid fa-hashtag"></i> Kode Reservasi</th>
                                <th><i class="fa-solid fa-money-check-dollar"></i> Status Pembayaran</th>
                                <th><i class="fa-solid fa-calendar-day"></i> Tanggal Check-In</th>
                                <th><i class="fa-solid fa-calendar-week"></i> Tanggal Check-Out</th>
                                <th><i class="fa-solid fa-gear"></i> Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Contoh Data --}}
                            <tr>
                                <td><strong>RES123456</strong></td>
                                <td>
                                    <span class="badge bg-success">
                                        <i class="fa-solid fa-circle-check me-1"></i> Sudah Dibayar
                                    </span>
                                </td>
                                <td>24 Jan 2025</td>
                                <td>27 Jan 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-secondary" disabled>
                                        <i class="fa-solid fa-lock me-1"></i> Non-Aktif
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>RES654321</strong></td>
                                <td>
                                    <span class="badge bg-warning text-dark">
                                        <i class="fa-solid fa-hourglass-half me-1"></i> Belum Dibayar
                                    </span>
                                </td>
                                <td>1 Feb 2025</td>
                                <td>5 Feb 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="fa-solid fa-trash me-1"></i> Batalkan
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>RES789012</strong></td>
                                <td>
                                    <span class="badge bg-warning text-dark">
                                        <i class="fa-solid fa-hourglass-half me-1"></i> Belum Dibayar
                                    </span>
                                </td>
                                <td>10 Feb 2025</td>
                                <td>15 Feb 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="fa-solid fa-trash me-1"></i> Batalkan
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Tambahkan FontAwesome --}}
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</x-layout>
