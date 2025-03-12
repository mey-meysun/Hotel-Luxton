<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="{{ asset('assets/css/stylelogin.css') }}" rel="stylesheet">
</head>

<body>
    <div class="login-container">
        <div class="icon-container">
            <i class="fas fa-user-circle"></i>
        </div>
        <h2>Login</h2>
        @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
        @endif
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="input-container">
                <i class="fas fa-envelope"></i>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-container">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" autocomplete="new-password" required>
                <i class="fas fa-eye eye-icon hide" id="toggle-password"></i>
            </div>
            <button type="submit">Login</button>
        </form>
        <div class="social-login">
            <p>Don't have an account? <a href="/register">Signup</a></p>
        </div>
    </div>

    <script src="{{ asset('assets/js/login.js') }}"></script> <!-- Memanggil file JS terpisah -->
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

        document.addEventListener("DOMContentLoaded", function () {
            const passwordInput = document.querySelector("#password");
            const togglePassword = document.querySelector("#toggle-password");

            if (passwordInput && togglePassword) {
                togglePassword.addEventListener("click", function () {
                    const isPasswordVisible = passwordInput.type === "text";
                    passwordInput.type = isPasswordVisible ? "password" : "text";
                    this.classList.toggle("fa-eye");
                    this.classList.toggle("fa-eye-slash");
                });
            }
        });
    </script>

    <style>
        /* Tambahin cursor pointer supaya ikon bisa diklik */
        .eye-icon {
            cursor: pointer;
        }
    </style>

</body>

</html>
