<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Fasilitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h4 class="mb-4">{{ isset($facility) ? 'Edit' : 'Tambah' }} Fasilitas</h4>

                        <form
                            action="{{ isset($facility) ? route('fasilitas.update', $facility->id) : route('fasilitas.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (isset($facility))
                                @method('PUT')
                            @endif

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Nama Fasilitas</label>
                                <input type="text" class="form-control" name="nama_fasilitas"
                                    value="{{ isset($facility) ? $facility->nama_fasilitas : '' }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" rows="3" required>{{ isset($facility) ? $facility->deskripsi : '' }}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Gambar</label>
                                <input type="file" class="form-control" name="gambar"
                                    {{ isset($facility) ? '' : 'required' }}>
                                @if (isset($facility) && $facility->gambar)
                                    <br>
                                    <img src="{{ asset('storage/' . $facility->gambar) }}" class="rounded mt-2"
                                        style="width: 150px;">
                                    <small class="text-muted d-block">Kosongkan jika tidak ingin mengganti
                                        gambar</small>
                                @endif
                            </div>

                            <button type="submit"
                                class="btn btn-md {{ isset($facility) ? 'btn-success' : 'btn-primary' }}">
                                {{ isset($facility) ? 'Update' : 'Simpan' }}
                            </button>
                        </form>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Gambar</th>
                                <th scope="col" style="width: 20%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($facilities as $facility)
                                <tr>
                                    <td>{{ $facility->nama_fasilitas }}</td>
                                    <td>{{ $facility->deskripsi }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('/storage/' . $facility->gambar) }}" class="rounded"
                                            style="width: 150px">
                                    </td>
                                    <td class="text-center">
                                        <form
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus fasilitas ini?');"
                                            action="{{ route('fasilitas.destroy', $facility->id) }}" method="POST">
                                            <a href="{{ route('fasilitas.create', $facility->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-danger">Data fasilitas belum tersedia.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
