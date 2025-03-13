<x-layout>

    <div class="container">
        <h1>Buat Reservasi</h1>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('reservations.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="room_id" class="form-label">Pilih Kamar</label>
                <select name="room_id" id="room_id" class="form-control" required>
                    <option value="">-- Pilih Kamar --</option>
                    @foreach($rooms as $room)
                        <option value="{{ $room->id }}">{{ $room->nomor_kamar }} - {{ $room->tipe_kamar }} (Rp {{ number_format($room->harga_per_malam) }})</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="check_in" class="form-label">Tanggal Check-in</label>
                <input type="date" name="check_in" id="check_in" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="check_out" class="form-label">Tanggal Check-out</label>
                <input type="date" name="check_out" id="check_out" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jumlah_tamu" class="form-label">Jumlah Tamu</label>
                <input type="number" name="jumlah_tamu" id="jumlah_tamu" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Reservasi</button>
        </form>
    </div>
</x-layout>