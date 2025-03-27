<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Reservasi Hotel</title>
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

        .content {
            width: 80%;
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

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            min-width: 600px;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 5px;
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
        <h1 class="mb-4">Daftar Reservasi</h1>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Customer</th>
                        <th>Kamar</th>
                        <th>Check-in</th>
                        <th>Check-out</th>
                        <th>Jumlah Tamu</th>
                        <th>Status Reservasi</th>
                        <th>Status Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->user->nama }}</td>
                            <td>{{ $reservation->tipe_kamar }}-{{ $reservation->no_kamar }}</td>
                            <td>{{ $reservation->check_in }}</td>
                            <td>{{ $reservation->check_out }}</td>
                            <td>{{ $reservation->jumlah_tamu }}</td>
                            <td>
                                <span class="badge {{ $reservation->status_pemesanan === 'Pending' ? 'bg-warning' : 'bg-success' }}">
                                    {{ $reservation->status_pemesanan }}
                                </span>
                            </td>
                            <td>
                                <span class="badge 
                                    {{ $reservation->status_pembayaran === 'Pending' ? 'bg-danger' : 
                                       ($reservation->status_pembayaran === 'Paid' ? 'bg-warning' : 'bg-success') }}">
                                    {{ $reservation->status_pembayaran }}
                                </span>
                            </td>
                            <td class="d-flex flex-wrap gap-1">
                                <!-- Tombol Edit -->
                                <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-warning btn-sm px-2 py-1">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
        
                                <!-- Tombol Hapus -->
                                <form id="delete-form-{{ $reservation->id }}" action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm px-2 py-1" onclick="confirmDelete({{ $reservation->id }})"> 
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
        
                                <!-- Tombol Verifikasi -->
                                @if ($reservation->status_pembayaran === 'Paid' || !$reservation->room_id)
                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#verifyModal{{ $reservation->id }}">
                                    Verifikasi
                                </button>
                            
                                <div class="modal fade" id="verifyModal{{ $reservation->id }}" tabindex="-1" aria-labelledby="verifyModalLabel{{ $reservation->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{ route('payment.verify', $reservation->id) }}" method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Verifikasi Pembayaran</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label>Pilih Nomor Kamar</label>
                                                        <select name="no_kamar" class="form-select" required>
                                                            <option value="">-- Pilih --</option>
                                                            @foreach ($rooms as $room)
                                                                @if ($room->tipe_kamar === $reservation->tipe_kamar)
                                                                    <option value="{{ $room->no_kamar }}">{{ $room->no_kamar }} ({{ $room->tipe_kamar }})</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Verifikasi</button>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endif
                            
                            </td>                            
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
        
    </div>

    <!-- ✅ Tambahkan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "Berhasil!",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "Gagal!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
      <script>
        function confirmDelete(reservationId) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + reservationId).submit();
                }
            });
        }
    </script>
</body>

</html>
