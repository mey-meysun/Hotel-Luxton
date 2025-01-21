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
    <link href="{{ asset('assets/css/style4.css') }}" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="#"><i class="fas fa-calendar-check"></i> Data Reservasi</a>
        <a href="/kamar"><i class="fas fa-bed"></i> Data Kamar</a>
        <a href="#"><i class="fas fa-cogs"></i> Data Fasilitas</a>
        <a href="#"><i class="fas fa-chart-line"></i> Laporan Bulanan</a>
    </div>

    <div class="content">
        <h1 class="mb-4">Selamat Datang, Admin!</h1>

        <!-- Statistik Kamar -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Kamar Tersedia</h5>
                        <p class="card-text display-4">15</p>
                        <i class="fas fa-bed" style="font-size: 2rem;"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-danger">
                    <div class="card-body">
                        <h5 class="card-title">Kamar Terisi</h5>
                        <p class="card-text display-4">10</p>
                        <i class="fas fa-bed" style="font-size: 2rem;"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning">
                    <div class="card-body">
                        <h5 class="card-title">Kamar dalam Perbaikan</h5>
                        <p class="card-text display-4">5</p>
                        <i class="fas fa-tools" style="font-size: 2rem;"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Data -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <h3 class="mb-3">Data Reservasi</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama Pelanggan</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>2025-01-15</td>
                            <td>
                                <span class="badge bg-success">Selesai</span>
                                <i class="fas fa-edit" style="cursor: pointer;"></i> 
                                <i class="fas fa-trash-alt" style="cursor: pointer;"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>2025-01-14</td>
                            <td>
                                <span class="badge bg-warning">Pending</span>
                                <i class="fas fa-edit" style="cursor: pointer;"></i> 
                                <i class="fas fa-trash-alt" style="cursor: pointer;"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-6 mb-4">
                <h3>Laporan Bulanan</h3>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Laporan Bulanan</h5>
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="card-text fs-5">Jumlah kamar dengan status <strong>"Selesai"</strong>: <span class="badge bg-success">25</span></p>
                                <p class="card-text fs-5">Jumlah kamar <strong>terisi</strong>: <span class="badge bg-danger">10</span></p>
                                <p class="card-text fs-5">Jumlah kamar dalam <strong>perbaikan</strong>: <span class="badge bg-warning">5</span></p>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <!-- Grafik batang untuk menampilkan laporan -->
                                <div class="bar-chart-container">
                                    <div class="bar" style="height: 60%; background-color: #28a745;"></div>
                                    <div class="bar" style="height: 40%; background-color: #dc3545;"></div>
                                    <div class="bar" style="height: 30%; background-color: #ffc107;"></div>
                                </div>
                                <small class="text-center mt-2">Status Kamar</small>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button class="btn btn-primary">Lihat Detail</button>
                        </div>
                    </div>
                </div>
            </div>            

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
