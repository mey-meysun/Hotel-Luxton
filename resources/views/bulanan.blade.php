<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Bulanan Hotel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
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
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
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
        }

        .alert {
            padding: 15px;
            background-color: #ffc107;
            color: #856404;
            border: 1px solid #ffeeba;
            border-radius: 4px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
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
                `;

                laporanContainer.innerHTML = table;
            } else {
                laporanContainer.innerHTML = `
                    <div class="alert">Tidak ada data untuk bulan yang dipilih.</div>
                `;
            }
        });
    </script>
</body>
</html>