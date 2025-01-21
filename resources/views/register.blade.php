<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Registrasi</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="{{ asset('assets/css/styleregister.css') }}" rel="stylesheet">
  
</head>
<body>
  <div class="login-container">
    <div class="icon-container">
      <i class="fas fa-user-plus"></i>
    </div>
    <h2>Registrasi</h2>
    <form>
      <!-- Input Nama -->
      <div class="input-container">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Nama Lengkap" required>
      </div>
      <!-- Input Email -->
      <div class="input-container">
        <i class="fas fa-envelope"></i>
        <input type="email" placeholder="Email" required>
      </div>
      <!-- Input Username -->
      <div class="input-container">
        <i class="fas fa-user-tag"></i>
        <input type="text" placeholder="Username" required>
      </div>
      <!-- Input Password -->
      <div class="input-container">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Password" required>
      </div>
      <!-- Input No Handphone -->
      <div class="input-container">
        <i class="fas fa-phone"></i>
        <input type="text" placeholder="No Handphone" required>
      </div>
      <!-- Tombol Daftar -->
      <button type="submit">Daftar</button>
    </form>
    <!-- Sudah punya akun -->
    <div class="social-login">
      <span>Sudah punya akun? <a href="index.html" style="color: #6dd5ed; text-decoration: none;">Login di sini</a></span>
    </div>
  </div>
</body>
</html>
