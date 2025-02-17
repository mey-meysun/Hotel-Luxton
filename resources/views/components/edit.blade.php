<x-layout>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </head>

    <body>
        <div class="container mt-5 pt-5 mb-5">
            <div class="row col-lg-8 mx-auto p-3 shadow-lg profile-card">
                <!-- Bagian Foto dan Tombol -->
                <form action="{{ route('customer.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('assets/images/p.jpg') }}" class="img-fluid rounded-circle border shadow-sm"
                            style="width: 180px; height: 180px; object-fit: cover;">
                    </div>

                    <!-- Bagian Detail Profil -->
                    <div class="col-md-8">
                        <h2 class="mb-3">User Profile</h2>

                        <table class="table table-borderless">
                            <tr>
                                <th colspan="2" class="h5 text-secondary">User Details:</th>
                            </tr>
                            <tr>
                                <th><label class="form-label"><i class="bi bi-person-circle"></i> Nama</label></th>
                                <td><input type="text" name="nama" class="form-control"
                                        value="{{ $user->nama }}" required></td>
                            </tr>
                            <tr>
                                <th><label class="form-label"><i class="bi bi-envelope"></i> Email</label></th>
                                <td><input type="email" name="email" class="form-control"
                                        value="{{ $user->email }}" required></td>
                            </tr>
                            <tr>
                                <th><label class="form-label"><i>@</i> Username</label></th>
                                <td><input type="text" name="username" class="form-control"
                                        value="{{ $user->username }}" required></td>
                            </tr>
                            <tr>
                                <th><label class="form-label"><i class="bi bi-key"></i> Password</label></th>
                                <td><input type="password" name="password" class="form-control"
                                        placeholder="Masukkan password baru (jika ingin mengganti)">
                                </td>
                            </tr>
                            <tr>
                                <th><label class="form-label"><i class="bi bi-telephone-fill"></i> No. Handphone</label>
                                </th>
                                <td><input type="text" name="hp" class="form-control"
                                        value="{{ $user->hp }}" required></td>
                            </tr>
                        </table>
                        <div class="mt-3 d-flex gap-3 px-3">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            <a href="{{ route('customer.profil') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
</x-layout>
