    <x-sidebar></x-sidebar>

    <div class="container">
        <h1>Daftar Reservasi</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
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
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->user->name }}</td>
                        <td>{{ $reservation->room->nomor_kamar }}</td>
                        <td>{{ $reservation->check_in }}</td>
                        <td>{{ $reservation->check_out }}</td>
                        <td>{{ $reservation->jumlah_tamu }}</td>
                        <td>{{ $reservation->status_reservasi }}</td>
                        <td>{{ $reservation->status_pembayaran }}</td>
                        <td>
                            <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
