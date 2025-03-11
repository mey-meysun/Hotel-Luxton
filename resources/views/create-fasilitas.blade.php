<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Fasilitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            min-width: 600px;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #007bff;
            color: #fff;
        }

        table tfoot th {
            background-color: black;
            color: white;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            background: #333;
            color: white;
            position: fixed;
            height: 100%;
            padding-top: 20px;
            left: 0;
            top: 0;
            transition: 0.3s;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
            margin: 5px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #575757;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Responsif */
        @media screen and (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                text-align: center;
            }

            .sidebar a {
                display: inline-block;
                padding: 10px;
            }

            .content {
                margin-left: 0;
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <x-sidebar />
    <div class="content">
        <div class="container mt-3 mb-5">
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

                                <div class="form-group mb-4">
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
                                <div class="d-flex align-items-center justify-content-center gap-3">
                                    <button type="submit"
                                        class="btn {{ isset($facility) ? 'btn-success' : 'btn-primary' }} btn-sm px-4 py-2 rounded-pill">
                                        {{ isset($facility) ? 'Update' : 'Simpan' }}
                                    </button>

                                    <button type="reset"
                                        class="btn btn-warning btn-sm px-4 py-2 rounded-pill">Reset</button>
                                </div>
                            </form>
                        </div>

                        <table class="table table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col" style="width: 20%">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                @forelse ($facilities as $facility)
                                    <tr>
                                        <td>{{ $facility->nama_fasilitas }}</td>
                                        <td>{{ $facility->deskripsi }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset('/storage/' . $facility->gambar) }}" class="rounded"
                                                style="width: 150px">
                                        </td>
                                        <td class="text-center">
                                            <form id="delete-form-{{ $facility->id }}"
                                                action="{{ route('fasilitas.destroy', $facility->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="d-flex align-items-center justify-content-center gap-2">
                                                    <a href="{{ route('fasilitas.create', $facility->id) }}"
                                                        class="btn btn-sm btn-primary px-4">Edit</a>
                                                    <button type="button" class="btn btn-sm btn-danger px-3"
                                                        onclick="confirmDelete({{ $facility->id }})">Hapus</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center text-danger">Data fasilitas belum
                                            tersedia.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if (session('success'))
            Swal.fire({
                icon: "success",
                title: "Berhasil!",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('error'))
            Swal.fire({
                icon: "error",
                title: "Gagal!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
    <script>
        function confirmDelete(facilityId) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + facilityId).submit();
                }
            });
        }
    </script>
</body>

</html>
