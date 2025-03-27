<x-layout>
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="mb-4">Detail Pembayaran</h2>

            <p><strong>Tipe Kamar:</strong> {{ $reservation->tipe_kamar }}</p>
            <p><strong>Harga per malam:</strong> Rp {{ number_format($harga_kamar) }}</p>
            
            @php
                $jumlahMalam = \Carbon\Carbon::parse($reservation->check_in)->diffInDays(\Carbon\Carbon::parse($reservation->check_out));
                $totalHarga = $harga_kamar * $jumlahMalam;
            @endphp

            <p><strong>Durasi:</strong> {{ $jumlahMalam }} malam</p>
            <p><strong>Total Harga:</strong> <span class="fw-bold text-primary">Rp {{ number_format($totalHarga) }}</span></p>

            <p><strong>Check-in:</strong> {{ \Carbon\Carbon::parse($reservation->check_in)->format('d M Y') }}</p>
            <p><strong>Check-out:</strong> {{ \Carbon\Carbon::parse($reservation->check_out)->format('d M Y') }}</p>

            <p>
                <strong>Status Pembayaran:</strong>
                @if($reservation->status_pembayaran === 'Pending')
                    <span class="badge bg-warning text-dark">Pending</span>
                @elseif($reservation->status_pembayaran === 'Paid')
                    <span class="badge bg-info text-dark">Menunggu Verifikasi</span>
                @else
                    <span class="badge bg-success">Terverifikasi</span>
                @endif
            </p>

            <hr>

            @if ($reservation->status_pembayaran === 'Pending')
                <form action="{{ route('payment.pay', $reservation->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary w-100">Bayar Sekarang</button>
                </form>
            @elseif($reservation->status_pembayaran === 'Paid')
                <div class="alert alert-info mt-3" role="alert">
                    Menunggu verifikasi admin...
                </div>
            @else
                <div class="alert alert-success mt-3" role="alert">
                    Pembayaran telah diverifikasi! 
                </div>
            @endif

            <a href="{{ route('customer.dashboard') }}" class="btn btn-secondary mt-4 w-100">Kembali ke Dashboard</a>
        </div>
    </div>
</x-layout>
