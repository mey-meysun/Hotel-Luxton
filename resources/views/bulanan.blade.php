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
            min-width: 600px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #4a90e2;
            color: white;
        }

        table tfoot th {
            background-color: #818181;
            color: white;
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
    <x-sidebar />
    <div class="content">
        <h1 class="mb-4">Laporan Bulanan Hotel</h1>
        <div class="container">
            <h2>Laporan Bulanan</h2>

            {{-- Form untuk memilih bulan --}}
            <form action="{{ route('laporan.bulanan') }}" method="GET">
                <label for="bulan">Pilih Bulan:</label>
                <input type="month" id="bulan" name="bulan" value="{{ request('bulan') }}" required>
                <button type="submit">Tampilkan</button>
            </form>

            <br>

            {{-- Cek apakah ada data --}}
            @if ($laporan->count() > 0)
                <div class="table-container">
                    <table border="1" cellspacing="0" cellpadding="5">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama Tamu</th>
                                <th>Tipe Kamar</th>
                                <th>Jumlah Malam</th>
                                <th>Total (Rp)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($laporan as $index => $item)
                                <tr>
                                    <td>RES{{ str_pad($item->id, 6, '0', STR_PAD_LEFT) }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->tipe_kamar }}</td>

                                    @php
                                        $jumlahMalam = \Carbon\Carbon::parse($item->check_in)->diffInDays(
                                            \Carbon\Carbon::parse($item->check_out),
                                        );
                                        $totalHarga = $item->room->harga_kamar * $jumlahMalam;
                                    @endphp
                                    <td>{{ $jumlahMalam }}</td>
                                    <td>Rp {{ number_format($totalHarga, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4">Total Keseluruhan</th>
                                <th>{{ number_format($laporan->count(), 0, ',', '.') }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @else
                <div class="text text-danger">Tidak ada data untuk bulan yang dipilih.</div>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
