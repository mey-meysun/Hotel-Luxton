<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/styleprofiledrop.css') }}" />
    <title>Profile</title>
  </head>
  <body>
    <nav class="navbar">
<div class="profile-dropdown">
    <div onclick="toggle()" class="profile-dropdown-btn">
      <div class="profile-img">
        <i class="fa-solid fa-circle"></i>
      </div>

      <span
        >Victoria
        <i class="fa-solid fa-angle-down"></i>
      </span>
    </div>

    <ul class="profile-dropdown-list">
      <li class="profile-dropdown-list-item">
        <a href="profile.html">
          <i class="fa-regular fa-user"></i>
          Edit Profile
        </a>
      </li>

      <li class="profile-dropdown-list-item">
        <a href="historyreservasi.html">
          <i class="fa-regular fa-envelope"></i>
          History Reservasi
        </a>
      </li>

      <li class="profile-dropdown-list-item">
        <a href="#">
          <i class="fa-solid fa-chart-line"></i>
          Analytics
        </a>
      </li>

      <li class="profile-dropdown-list-item">
        <a href="#">
          <i class="fa-solid fa-sliders"></i>
          Settings
        </a>
      </li>

      <li class="profile-dropdown-list-item">
        <a href="#">
          <i class="fa-regular fa-circle-question"></i>
          Help & Support
        </a>
      </li>
      <hr />

      <li class="profile-dropdown-list-item">
        <a href="#">
          <i class="fa-solid fa-arrow-right-from-bracket"></i>
          Log out
        </a>
      </li>
    </ul>
  </div>
</nav>

<script src="profile.js"></script>
</body>
</html>
