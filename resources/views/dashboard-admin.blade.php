<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Link ke file CSS eksternal -->
    {{-- <link rel="stylesheet" href="styles.css"> --}}
    <link href="{{ asset('assets/css/styledashboard.css') }}" rel="stylesheet">
</head>

<body>
    <x-sidebar />

    <div class="content">
        <h1 class="mb-4">Selamat Datang, {{ Auth::user()->nama }}</h1>

        <!-- Statistik Kamar -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Kamar Tersedia</h5>
                        <p class="card-text display-4">{{ $rooms->where('status_kamar', 'tersedia')->count() }}</p>
                        <i class="fas fa-bed" style="font-size: 2rem;"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-danger">
                    <div class="card-body">
                        <h5 class="card-title">Kamar Terisi</h5>
                        <p class="card-text display-4">{{ $rooms->where('status_kamar', 'terisi')->count() }}</p>
                        <i class="fas fa-bed" style="font-size: 2rem;"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning">
                    <div class="card-body">
                        <h5 class="card-title">Kamar dalam Perbaikan</h5>
                        <p class="card-text display-4">{{ $rooms->where('status_kamar', 'diperbaiki')->count() }}</p>
                        <i class="fas fa-tools" style="font-size: 2rem;"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Data -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <h3 class="mb-3">Data Reservasi</h3>
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Nama</th>
                            <th>Kamar</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($reservations as $reservation)
                            <tr>
                                <td>{{ $reservation->user->nama }}</td>
                                <td>{{ $reservation->no_kamar }}-{{ $reservation->tipe_kamar }}</td>
                                <td>
                                    <span
                                        class="badge {{ $reservation->status_pemesanan === 'Pending' ? 'bg-warning' : 'bg-success' }}">
                                        {{ $reservation->status_pemesanan }}
                                    </span>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-muted py-4">
                                    <i class="bi bi-info-circle"></i> Tidak ada reservasi saat ini.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="col-md-6 mb-4">
                <h3>Laporan Bulanan</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="card-text fs-5">
                                    Jumlah kamar dengan status <strong>"Completed"</strong>:
                                    <span class="badge bg-success">
                                        {{ $reservations->where('status_pemesanan', 'Completed')->count() }}
                                    </span>
                                </p>
                                <p class="card-text fs-5">
                                    Jumlah kamar <strong>terisi</strong>:
                                    <span class="badge bg-danger">
                                        {{ $rooms->where('status_kamar', 'terisi')->count() }}
                                    </span>
                                </p>
                                <p class="card-text fs-5">
                                    Jumlah kamar dalam <strong>perbaikan</strong>:
                                    <span class="badge bg-warning">
                                        {{ $rooms->where('status_kamar', 'diperbaiki')->count() }}
                                    </span>
                                </p>
                            </div>

                            <!-- Grafik Batang Status Kamar -->
                            @php
                                $totalRooms = $rooms->count();
                                $completed = $reservations->where('status_pemesanan', 'Completed')->count();
                                $filled = $rooms->where('status_kamar', 'terisi')->count();
                                $repair = $rooms->where('status_kamar', 'diperbaiki')->count();

                                // Menghitung persentase tinggi batang
                                $completedHeight = $totalRooms ? ($completed / $totalRooms) * 100 : 0;
                                $filledHeight = $totalRooms ? ($filled / $totalRooms) * 100 : 0;
                                $repairHeight = $totalRooms ? ($repair / $totalRooms) * 100 : 0;
                            @endphp

                            <div class="d-flex flex-column align-items-center">
                                <div class="bar-chart-container d-flex">
                                    <div class="bar mx-1 bg-success" style="height: {{ $completedHeight }}%;"></div>
                                    <div class="bar mx-1 bg-danger" style="height: {{ $filledHeight }}%;"></div>
                                    <div class="bar mx-1 bg-warning" style="height: {{ $repairHeight }}%;"></div>
                                </div>
                                <small class="text-center mt-2">Status Kamar</small>
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <a href="/laporan" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            <script>
                @if (session('success'))
                    Swal.fire({
                        icon: "success",
                        title: "Berhasil!",
                        text: "{{ session('success') }}",
                        showConfirmButton: false,
                        timer: 2000
                    });
                @elseif (session('error'))
                    Swal.fire({
                        icon: "error",
                        title: "Gagal!",
                        text: "{{ session('error') }}",
                        showConfirmButton: false,
                        timer: 2000
                    });
                @endif
            </script>
</body>

</html>
