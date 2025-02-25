<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Bulanan Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('assets/css/styledashboard.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container { 
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        input[type="month"] {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 12px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            min-width: 600px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #007bff;
            color: #fff;
        }

        table tfoot th {
            background-color: black;
            color: white;
        }

        .alert {
            padding: 15px;
            background-color: #ffc107;
            color: #856404;
            border: 1px solid #ffeeba;
            border-radius: 4px;
            margin-top: 20px;
            text-align: center;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            background: #333;
            color: white;
            position: fixed;
            height: 100%;
            padding-top: 20px;
            left: 0;
            top: 0;
            transition: 0.3s;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
            margin: 5px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #575757;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Responsif */
        @media screen and (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                text-align: center;
            }

            .sidebar a {
                display: inline-block;
                padding: 10px;
            }

            .content {
                margin-left: 0;
                padding: 20px;
            }

            button {
                width: auto;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="#"><i class="fas fa-calendar-check"></i> Data Reservasi</a>
        <a href="/kamar"><i class="fas fa-bed"></i> Data Kamar</a>
        <a href="#"><i class="fas fa-cogs"></i> Data Fasilitas</a>
        <a href="/bulanan"><i class="fas fa-chart-line"></i> Laporan Bulanan</a>
    </div>

    <div class="content">
        <h1 class="mb-4">Selamat Datang, Admin!</h1>
    </div>       
    
    <div class="container">
        <h1>Laporan Bulanan Hotel</h1>

        <form id="laporan-form">
            <label for="bulan">Pilih Bulan:</label>
            <input type="month" id="bulan" name="bulan" required>
            <button type="submit">Tampilkan</button>
        </form>

        <div id="laporan-container">
        </div>
    </div>

    <script>
        const laporanHotel = [
            { tanggal: "2025-01-05", tamu: "John Doe", tipeKamar: "Deluxe", total: 1500000 },
            { tanggal: "2025-01-12", tamu: "Jane Smith", tipeKamar: "Standard", total: 800000 },
            { tanggal: "2025-01-18", tamu: "Michael Johnson", tipeKamar: "Suite", total: 2500000 },
            { tanggal: "2025-01-22", tamu: "Emily Davis", tipeKamar: "Standard", total: 800000 }
        ];

        document.getElementById("laporan-form").addEventListener("submit", function (e) {
            e.preventDefault();

            const bulan = document.getElementById("bulan").value;
            const laporanContainer = document.getElementById("laporan-container");

            const filteredData = laporanHotel.filter(item => item.tanggal.startsWith(bulan));

            if (filteredData.length > 0) {
                let totalKeseluruhan = 0;

                let table = `
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Tamu</th>
                                    <th>Tipe Kamar</th>
                                    <th>Total (Rp)</th>
                                </tr>
                            </thead>
                            <tbody>
                `;

                filteredData.forEach((item, index) => {
                    totalKeseluruhan += item.total;
                    table += `
                        <tr>
                            <td>${index + 1}</td>
                            <td>${item.tanggal}</td>
                            <td>${item.tamu}</td>
                            <td>${item.tipeKamar}</td>
                            <td>${item.total.toLocaleString()}</td>
                        </tr>
                    `;
                });

                table += `
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="4">Total Keseluruhan</th>
                                    <th>${totalKeseluruhan.toLocaleString()}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                `;

                laporanContainer.innerHTML = table;
            } else {
                laporanContainer.innerHTML = <div class="alert">Tidak ada data untuk bulan yang dipilih.</div>;
            }
        });
    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>