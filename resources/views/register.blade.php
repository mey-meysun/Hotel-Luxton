<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Halaman Registrasi Pengguna Baru">
    <meta name="keywords" content="registrasi, daftar, login">
    <meta name="author" content="Nama Anda">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="{{ asset('assets/css/style1.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="login-container">
        <div class="icon-container">
            <i class="fas fa-user-plus"></i>
        </div>
        <h2>Registrasi</h2>

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="input-container mb-1 mt-1">
                <i class="fas fa-user"></i>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    placeholder="Nama Lengkap">
            </div>
            @error('nama')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <div class="input-container mb-1 mt-1">
                <i class="fas fa-envelope"></i>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    placeholder="Email">
            </div>
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <div class="input-container mb-1 mt-1">
                <i class="fas fa-user-tag"></i>
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                    placeholder="Username">
            </div>
            @error('username')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <div class="input-container mb-1 mt-1">
                <i class="fas fa-lock"></i>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                    placeholder="Password">
            </div>
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <div class="input-container mb-1 mt-1">
                <i class="fas fa-phone"></i>
                <input type="text" class="form-control @error('hp') is-invalid @enderror" name="hp"
                    placeholder="No Handphone">
            </div>
            @error('hp')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <button type="submit" class="mt-3 rounded-pill">Daftar</button>
        </form>

        <div class="social-login">
            <span>Sudah punya akun?
                <a href="/login" style="color: #6dd5ed; text-decoration: none;">
                    Login di sini
                </a>
            </span>
        </div>
    </div>
</body>

</html>
