<x-layout>
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">
    <div class="container mt-5">
        <h1 class="text-center mb-4">
            <i class="fa-solid fa-calendar-check me-2"></i> Dashboard Reservasi
        </h1>

        {{-- Pesan Sukses --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Kartu Daftar Reservasi --}}
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    <i class="fa-solid fa-list me-2"></i> Daftar Reservasi Saya
                </h5>
            </div>
            <div class="card-body">
                @if($reservations->isEmpty())
                    <p class="text-center">Belum ada reservasi.</p>
                @else
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
                            @foreach($reservations as $reservation)
                            <tr>
                                <td><strong>RES{{ str_pad($reservation->id, 6, '0', STR_PAD_LEFT) }}</strong></td>
                                <td>
                                    @if($reservation->status_pembayaran === 'Pending')
                                        <span class="badge bg-warning text-dark">
                                            <i class="fa-solid fa-hourglass-half me-1"></i> Belum Dibayar
                                        </span>
                                    @elseif($reservation->status_pembayaran === 'Paid')
                                        <span class="badge bg-secondary">
                                            <i class="fa-solid fa-clock me-1"></i> Menunggu Verifikasi
                                        </span>
                                    @else
                                        <span class="badge bg-success">
                                            <i class="fa-solid fa-circle-check me-1"></i> Verified
                                        </span>
                                    @endif
                                </td>
                                <td>{{ \Carbon\Carbon::parse($reservation->check_in)->format('d M Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($reservation->check_out)->format('d M Y') }}</td>
                                <td>
                                    @if($reservation->status_pembayaran === 'Pending')
                                        <a href="{{ route('payment.show', $reservation->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa-solid fa-credit-card me-1"></i> Bayar
                                        </a>
                                        <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin batalkan reservasi ini?')">
                                                <i class="fa-solid fa-trash me-1"></i> Batalkan
                                            </button>
                                        </form>
                                    @elseif($reservation->status_pembayaran === 'Paid')
                                        <button class="btn btn-sm btn-secondary" disabled>
                                            <i class="fa-solid fa-clock me-1"></i> Menunggu Verifikasi
                                        </button>
                                    @else
                                        <button class="btn btn-sm btn-success" disabled>
                                            <i class="fa-solid fa-check me-1"></i> Lunas
                                        </button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Tambahkan FontAwesome --}}
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</x-layout>
