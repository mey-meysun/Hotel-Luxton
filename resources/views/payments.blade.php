<x-layout>
    <div class="container">
        <h1>Detail Pembayaran</h1>

        <p><strong>Kamar:</strong> {{ $reservation->room->nomor_kamar }} - {{ $reservation->room->tipe_kamar }}</p>
        <p><strong>Harga per malam:</strong> Rp {{ number_format($reservation->room->harga_per_malam) }}</p>
        <p><strong>Check-in:</strong> {{ $reservation->check_in }}</p>
        <p><strong>Check-out:</strong> {{ $reservation->check_out }}</p>
        <p><strong>Status Pembayaran:</strong> {{ $reservation->status_pembayaran }}</p>

        @if ($reservation->status_pembayaran === 'Pending')
            <form action="{{ route('payment.pay', $reservation->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
            </form>
        @elseif($reservation->status_pembayaran === 'Paid')
            <p class="text-warning">Menunggu verifikasi admin...</p>
        @else
            <p class="text-success">Pembayaran sudah diverifikasi!</p>
        @endif
    </div>
</x-layout>
