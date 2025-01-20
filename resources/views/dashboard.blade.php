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
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Arial', sans-serif;
        }
        .sidebar {
            height: 100vh;
            background-color: #212529;
            color: white;
            padding: 20px;
            position: fixed;
            width: 250px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar h2 {
            font-size: 1.8rem;
            margin-bottom: 2rem;
            text-align: center;
            font-weight: bold;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 15px 0;
            padding: 10px 15px;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 270px;
            padding: 20px;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border: none;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.02);
        }
        .table thead {
            background-color: #343a40;
            color: white;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="#"><i class="fas fa-calendar-check"></i> Data Reservasi</a>
        <a href="#"><i class="fas fa-bed"></i> Data Kamar</a>
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
                        <p class="card-text fs-5">Jumlah kamar dengan status "Selesai": 25</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
