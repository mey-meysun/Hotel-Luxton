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
        <h1>Edit Reservasi</h1>
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        {{-- Menampilkan error spesifik dari validasi form --}}
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
        <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="room_id" class="form-label">Tipe Kamar</label>
                <select name="tipe_kamar" class="form-select">
                    <option value="">-- Pilih Tipe Kamar --</option>
                    @foreach ($rooms->unique('tipe_kamar') as $room)
                        <option value="{{ $room->tipe_kamar }}" {{ $reservation->tipe_kamar == $room->tipe_kamar ? 'selected' : '' }}>
                            {{ $room->tipe_kamar }}
                        </option>
                    @endforeach
                </select>                
            </div>
            <div class="mb-3">
                <label>Check-in</label>
                <input type="date" name="check_in" value="{{ $reservation->check_in }}" class="form-control"
                    required>
            </div>
            <div class="mb-3">
                <label>Check-out</label>
                <input type="date" name="check_out" value="{{ $reservation->check_out }}" class="form-control"
                    required>
            </div>
            <div class="mb-3">
                <label>Jumlah Tamu</label>
                <input type="number" name="jumlah_tamu" value="{{ $reservation->jumlah_tamu }}" class="form-control"
                    required>
            </div>
            <div class="mb-3">
                <label>Status Pemesanan</label>
                <select name="status_pemesanan" class="form-select" required>
                    <option value="Pending" {{ $reservation->status_pemesanan == 'Pending' ? 'selected' : '' }}>Pending
                    </option>
                    <option value="Confirmed" {{ $reservation->status_pemesanan == 'Confirmed' ? 'selected' : '' }}>
                        Confirmed</option>
                    <option value="Checked-In" {{ $reservation->status_pemesanan == 'Checked-In' ? 'selected' : '' }}>
                        Checked-In</option>
                    <option value="Completed" {{ $reservation->status_pemesanan == 'Completed' ? 'selected' : '' }}>
                        Completed</option>
                    <option value="Canceled" {{ $reservation->status_pemesanan == 'Canceled' ? 'selected' : '' }}>
                        Canceled</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Status Pembayaran</label>
                <select name="status_pembayaran" class="form-select" required>
                    <option value="Pending" {{ $reservation->status_pembayaran == 'Pending' ? 'selected' : '' }}>
                        Pending</option>
                    <option value="Paid" {{ $reservation->status_pembayaran == 'Paid' ? 'selected' : '' }}>Paid
                    </option>
                    <option value="Verified" {{ $reservation->status_pembayaran == 'Verified' ? 'selected' : '' }}>
                        Verified</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Reservasi</button>
        </form>

    </div>
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
