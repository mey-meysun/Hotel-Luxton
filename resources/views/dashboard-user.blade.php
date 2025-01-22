@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Dashboard - Daftar Reservasi</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th scope="col">Reservasi Code</th>
                <th scope="col">Check-In</th>
                <th scope="col">Check-Out</th>
                <th scope="col">Status Pembayaran</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ABC123</td>
                <td>2025-02-01</td>
                <td>2025-02-07</td>
                <td>Belum Dibayar</td>
                <td>
                    <button class="btn btn-danger" onclick="cancelReservation()">Batal</button>
                </td>
            </tr>
            <tr>
                <td>DEF456</td>
                <td>2025-03-05</td>
                <td>2025-03-10</td>
                <td>Sudah Dibayar</td>
                <td>
                    <span class="text-muted">Reservasi Sudah Dibayar</span>
                </td>
            </tr>
            <tr>
                <td>GHI789</td>
                <td>2025-04-12</td>
                <td>2025-04-15</td>
                <td>Belum Dibayar</td>
                <td>
                    <button class="btn btn-danger" onclick="cancelReservation()">Batal</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
function cancelReservation() {
    alert('Reservasi berhasil dibatalkan');
    // Di sini nanti Anda bisa menambahkan logika pembatalan reservasi via AJAX atau form submission
}
</script>
@endsection
