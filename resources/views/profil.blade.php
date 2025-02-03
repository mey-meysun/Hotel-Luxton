<x-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Boxicons -->
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </head>

    <body style="background-color: #f7f7f7; padding-top: 50px;">
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="container mt-5 pt-5 mb-5">
            <div class="row col-lg-8 mx-auto p-3 shadow-lg profile-card">
                <!-- Bagian Foto dan Tombol -->
                <div class="col-md-4 text-center">
                    <img src="{{ asset('assets/images/p.jpg') }}" class="img-fluid rounded-circle border shadow-sm"
                        style="width: 180px; height: 180px; object-fit: cover;">
                    <div class="mt-3 d-flex gap-3 px-3">
                        <a href="profiledit.php">
                            <button class="btn btn-sm btn-info text-white">Edit Profile</button>
                        </a>
                        <form action="{{ route('logout') }}" method="POST" role="search">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-warning text-white">Logout</button>
                        </form>
                    </div>
                </div>

                <!-- Bagian Detail Profil -->
                <div class="col-md-8">
                    <h2 class="mb-3">User Profile</h2>
                    <table class="table table-borderless">
                        <tr>
                            <th colspan="2" class="h5 text-secondary">User Details:</th>
                        </tr>
                        <tr>
                            <th><i class="bi bi-person-circle"></i> Nama</th>
                            <td>nur</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-envelope"></i> Email</th>
                            <td>nur@gmail.com</td>
                        </tr>
                        <tr>
                            <th><i>@</i> Username</th>
                            <td>nur</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-key"></i> Password</th>
                            <td>12345</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-geo-alt-fill"></i> Alamat</th>
                            <td>Cirebon</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-telephone-fill"></i> No. Handphone</th>
                            <td>1234567890</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
</x-layout>
