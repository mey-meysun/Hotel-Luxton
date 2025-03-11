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
                <div class="col-md-4 text-center">
                    <img src="{{ asset('assets/images/p.jpg') }}" class="img-fluid rounded-circle border shadow-sm"
                        style="width: 180px; height: 180px; object-fit:cover;">
                    <div class="mt-3 d-flex gap-3 px-3">
                        <a href="{{ route('customer.edit') }}">
                            <button class="btn btn-sm btn-info text-white">Edit Profile</button>
                        </a>
                        <button class="btn btn-sm btn-warning text-white" onclick="confirmLogout(event)">Logout</button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            @method('DELETE')
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
                            <td>{{ Auth::user()->nama }}</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-envelope"></i> Email</th>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <th><i>@</i> Username</th>
                            <td>{{ Auth::user()->username }}</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-key"></i> Password</th>
                            <td>{{ str_repeat('*', Auth::user()->password_length ?? 3) }}</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-telephone-fill"></i> No. Handphone</th>
                            <td>{{ Auth::user()->hp }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            @if(session('success'))
                Swal.fire({
                    icon: "success",
                    title: "Berhasil!",
                    text: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 2000
                });
            @elseif(session('error'))
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
            function confirmLogout(event) {
                event.preventDefault();
                Swal.fire({
                    title: 'Anda yakin ingin logout?',
                    text: "Anda harus login kembali setelah logout.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Logout!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('logout-form').submit();
                    }
                });
            }
        </script>
        
    </body>

    </html>
</x-layout>
