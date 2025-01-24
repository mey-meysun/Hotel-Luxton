<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings</title>
    <link rel="stylesheet" href="styleprofile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            max-width: 100%;
            margin: 10px auto;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-control {
            padding: 10px;
        }

        @media (min-width: 768px) {
            .card {
                max-width: 500px;
            }
        }
    </style>
</head>

<body>
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4 text-center">Account</h4>

        <div class="card overflow-hidden p-3">
            <!-- Profile Picture Section -->
            <div class="card-body media align-items-center">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt class="d-block ui-w-80">
                <div class="media-body ml-4">
                    <label class="btn btn-outline-primary">
                        Upload new photo
                        <input type="file" class="account-settings-fileinput">
                    </label>
                    &nbsp;
                    <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                </div>
            </div>

            <hr class="border-light m-0">

            <!-- Account Information Section -->
            <div class="card-body">
                <div class="form-group">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control mb-1" placeholder="Enter your username">
                </div>

                <div class="form-group">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control mb-1" placeholder="Enter your name">
                </div>

                <div class="form-group">
                    <label class="form-label">E-mail</label>
                    <input type="email" class="form-control mb-1" placeholder="Enter your email">
                    <div class="alert alert-warning mt-3">
                        Your email is not confirmed. Please check your inbox.<br>
                        <a href="javascript:void(0)">Resend confirmation</a>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Company</label>
                    <input type="text" class="form-control mb-1" placeholder="Enter your company">
                </div>

                <!-- Action Buttons -->
                <div class="text-right mt-3">
                    <button type="button" class="btn btn-primary" onclick="window.location.href='profiledrop.html';">Save changes</button>
                    &nbsp;
                    <button type="button" class="btn btn-default">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
