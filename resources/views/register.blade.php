<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('assets/css/styleregister.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form id="registrationForm" class="form">
            <h1>Registrasi</h1>
            <div class="form-group">
                <input type="text" id="fullName" placeholder="Nama Lengkap" required>
                <label for="fullName"><i class="fas fa-user"></i> Nama Lengkap</label>
            </div>
            <div class="form-group">
                <input type="email" id="email" placeholder="Email" required>
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
            </div>
            <div class="form-group">
                <input type="text" id="username" placeholder="Username" required>
                <label for="username"><i class="fas fa-user-tag"></i> Username</label>
            </div>
            <div class="form-group">
                <input type="password" id="password" placeholder="Password" required>
                <label for="password"><i class="fas fa-lock"></i> Password</label>
            </div>
            <div class="form-group">
                <input type="tel" id="phone" placeholder="No Handphone" required>
                <label for="phone"><i class="fas fa-phone-alt"></i> No Handphone</label>
            </div>
            <button type="submit">Daftar</button>
            <p>Sudah punya akun? <a href="/login">Login di sini</a></p>
        </form>
    </div>
    {{-- <script src="script.js"></script> --}}
    <script src="{{ asset('assets/js/register.js') }}"></script>
</body>
</html>

