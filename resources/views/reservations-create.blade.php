<x-layout>
    <div class="container pt-5">
        <h1>Buat Reservasi</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        {{-- Menampilkan error spesifik dari validasi form --}}
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach

        <form action="{{ route('reservations.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Customer</label>
                <input type="text" name="nama" id="nama" class="form-control" required
                    value="{{ auth()->user()->nama }}" readonly>
            </div>

            <div class="mb-3">
                <label for="tipe_kamar" class="form-label">Pilih Tipe Kamar</label>
                <select name="tipe_kamar" id="tipe_kamar" class="form-control" required>
                    <option value="">-- Pilih Tipe Kamar --</option>
                    @foreach ($rooms->unique('tipe_kamar') as $room)
                        <option value="{{ $room->tipe_kamar }}"
                            {{ $selectedRoom && $selectedRoom->tipe_kamar == $room->tipe_kamar ? 'selected' : '' }}>
                            {{ $room->tipe_kamar }} (Rp {{ number_format($room->harga_kamar, 0, ',', '.') }})
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="mb-3">
                <label>Check-in</label>
                <input type="date" name="check_in" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Check-out</label>
                <input type="date" name="check_out" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Jumlah Tamu</label>
                <input type="number" name="jumlah_tamu" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
        </form>

    </div>
</x-layout>
