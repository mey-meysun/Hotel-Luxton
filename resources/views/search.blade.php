<x-layout>
    <div class="container mt-5">
        <h2 class="text-center">Hasil Pencarian Kamar</h2>

        @if ($rooms->isEmpty())
            <div class="alert alert-warning text-center mt-3">
                Tidak ada kamar yang sesuai dengan filter yang dipilih.
            </div>
        @else
            <div class="row">
                @foreach ($rooms as $room)
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 rounded-3 shadow h-100 d-flex flex-column">
                            <img src="{{ asset('storage/' . $room->gambar) }}" class="card-img-top rounded"
                                alt="{{ $room->tipe_kamar }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body p-4 d-flex flex-column">
                                <h5 class="card-title">{{ $room->tipe_kamar }} ({{ $room->status_kamar }})</h5>
                                <p><strong>Harga:</strong> Rp{{ number_format($room->harga_kamar, 0, ',', '.') }}</p>
                                <p class="text-muted flex-grow-1 overflow-hidden" style="max-height: 50px;">
                                    Deskripsi: {{ $room->deskripsi_kamar }}
                                </p>
                                <a href="{{ route('rooms.show', $room->id) }}"
                                    class="btn btn-sm btn-outline-secondary rounded mt-auto d-flex justify-content-center align-items-center">View</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="text-center mt-4">
            <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Kembali ke Daftar Kamar</a>
        </div>
    </div>
</x-layout>
