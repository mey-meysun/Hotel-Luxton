    <x-sidebar></x-sidebar>

    <div class="container">
        <h1>Edit Reservasi</h1>

        <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="status_reservasi" class="form-label">Status Reservasi</label>
                <select name="status_reservasi" id="status_reservasi" class="form-control">
                    <option value="Pending" {{ $reservation->status_reservasi == 'Pending' ? 'selected' : '' }}>Pending
                    </option>
                    <option value="Confirmed" {{ $reservation->status_reservasi == 'Confirmed' ? 'selected' : '' }}>
                        Confirmed</option>
                    <option value="Checked-in" {{ $reservation->status_reservasi == 'Checked-in' ? 'selected' : '' }}>
                        Checked-in</option>
                    <option value="Completed" {{ $reservation->status_reservasi == 'Completed' ? 'selected' : '' }}>
                        Completed</option>
                    <option value="Canceled" {{ $reservation->status_reservasi == 'Canceled' ? 'selected' : '' }}>
                        Canceled</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                <select name="status_pembayaran" id="status_pembayaran" class="form-control">
                    <option value="Pending" {{ $reservation->status_pembayaran == 'Pending' ? 'selected' : '' }}>Pending
                    </option>
                    <option value="Paid" {{ $reservation->status_pembayaran == 'Paid' ? 'selected' : '' }}>Paid
                    </option>
                    <option value="Verified" {{ $reservation->status_pembayaran == 'Verified' ? 'selected' : '' }}>
                        Verified</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
