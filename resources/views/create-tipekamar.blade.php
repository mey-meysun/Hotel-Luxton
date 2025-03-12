<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h4 class="mb-4">{{ isset($room) ? 'Edit' : 'Tambah' }} Rooms</h4>

                        <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        
                            @if (isset($room))
                            @method('PUT')
                            @endif

<div class="form-group mb-3">
    <label class="font-weight-bold">No Kamar</label>
    <input type="text" class="form-control" name="no_kamar"
        value="{{ isset($room) ? $room->no_kamar : '' }}" required>
</div>

<div class="form-group mb-3">
    <label class="font-weight-bold">Tipe Kamar</label>
    <input type="text" class="form-control" name="tipe_kamar"
        value="{{ isset($room) ? $room->tipe_kamar : '' }}" required>
</div>

<div class="form-group mb-3">
    <label class="font-weight-bold">Harga Kamar</label>
    <input type="number" class="form-control" name="harga_kamar"
        value="{{ isset($room) ? $room->harga_kamar : '' }}" required>
</div>

<div class="form-group mb-3">
    <label class="font-weight-bold">Status Kamar</label>
    <input type="text" class="form-control" name="status_kamar"
        value="{{ isset($room) ? $room->status_kamar : '' }}" required>
</div>

<div class="form-group mb-3">
    <label class="font-weight-bold">Deskripsi Kamar</label>
    <textarea class="form-control" name="deskripsi_kamar" rows="3" required>{{ isset($room) ? $room->deskripsi_kamar : '' }}</textarea>
</div>

<div class="form-group mb-3">
    <label class="font-weight-bold">Gambar</label>
    <input type="file" class="form-control" name="gambar"
        {{ isset($room) ? '' : 'required' }}>
    @if (isset($room) && $room->gambar)
        <br>
        <img src="{{ asset('storage/' . $room->gambar) }}" class="rounded mt-2"
            style="width: 150px;">
        <small class="text-muted d-block">Kosongkan jika tidak ingin mengganti
            gambar</small>
    @endif
</div>

<button type="submit"
    class="btn btn-md {{ isset($room) ? 'btn-success' : 'btn-primary' }}">
    {{ isset($room) ? 'Update' : 'Simpan' }}

</button>
</form>
</div>

<table class="table table-bordered table-striped table-hover">
<thead class="thead-dark">
<tr>
    <th scope="col">No Kamar</th>
    <th scope="col">Tipe Kamar</th>
    <th scope="col">Harga Kamar</th>
    <th scope="col">Status Kamar</th>
    <th scope="col">Deskripsi Kamar</th>
    <th scope="col">Gambar</th>
    <th scope="col" style="width: 20%">Aksi</th>
</tr>
</thead>
<tbody>
@forelse ($rooms as $room)
    <tr>
        <td>{{ $room->no_kamar }}</td>
        <td>{{ $room->tipe_kamar }}</td>
        <td>{{ $room->harga_kamar }}</td>
        <td>{{ $room->status_kamar }}</td>
        <td>{{ $room->deskripsi_kamar }}</td>
        <td class="text-center">
            <img src="{{ asset('/storage/' . $room->gambar) }}" class="rounded"
                style="width: 150px">
        </td>
        <td class="text-center">
            <form
                onsubmit="return confirm('Apakah Anda yakin ingin menghapus kamar ini?');"
                action="{{ route('rooms.destroy', $room->id) }}" method="POST">
                <a href="{{ route('rooms.create', $room->id) }}"
                    class="btn btn-sm btn-primary">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">hapus</button>
            </form>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="7" class="text-center text-danger">Data room belum tersedia.
    </tr>
@endforelse
</tbody>
</table>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>