<?php

?>
<!DOCTYPE html>
<html lang="en">
<!-- coding by @_.codedevotee -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Register form</title>

    <!--Boxicons CDN-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' 
    rel='stylesheet'>

    <!--Custom CSS-->
    {{-- <link rel="stylesheet" href="../css/style.css"> --}}
    <link href="{{ asset('assets/css/style1.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style3.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style1.css') }}" rel="stylesheet">

</head>

<body>
    <!-- FOR SOURCE CODE COMMENT "CODE" -->

    <div class="wrapper">
        <span class="rotate-bg"></span>
        <span class="rotate-bg2"></span>

        <div class="form-box login">
            <h2 class="title animation" style="--i:0; --j:21">Login</h2>
            <form action="#">

                <div class="input-box animation" style="--i:1; --j:22">
                    <input type="text" required>
                    <label for="">Username</label>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box animation" style="--i:2; --j:23">
                    <input type="password" required>
                    <label for="">Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn animation" style="--i:3; --j:24">Login</button>
                <div class="linkTxt animation" style="--i:5; --j:25">
                    <p>Don't have an account? <a href="/register" class="register-link">Sign Up</a></p>
                </div>
            </form>
        </div>

        <div class="info-text login" style="color: white;">
            <h2 class="animation" style="--i:0; --j:20 ">Welcome Back!</h2>
            <p class="animation" style="--i:1; --j:21" >Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Deleniti,rem?</p>
        </div>

    <!--Script.js-->
    {{-- <script src="../js/script.js"></script> --}}
    <script src="{{ asset('assets/js.min.js') }}"></script>
</body>

</html> 