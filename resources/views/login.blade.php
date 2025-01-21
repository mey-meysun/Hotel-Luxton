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
    <form>
      <div class="input-container">
        <i class="fas fa-envelope"></i>
        <input type="text" placeholder="Username" required>
      </div>
      <div class="input-container">
        <i class="fas fa-lock"></i>
        <input type="password" id="password" placeholder="Password" required>
        <i class="fas fa-eye eye-icon" id="toggle-password"></i>
      </div>
      <div class="remember-forgot">
        <label>
          <input type="checkbox"> Remember Me
        </label>
        <a href="#">Lupa Password?</a>
      </div>
      <button type="submit">Login</button>
    </form>
    <div class="social-login">
      <span>Atau login dengan:</span>
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-google"></i>
      <i class="fab fa-twitter"></i>
    </div>
  </div>

  <script src="{{ asset('assets/js/login.js') }}"></script> <!-- Memanggil file JS terpisah -->
</body>
</html>

