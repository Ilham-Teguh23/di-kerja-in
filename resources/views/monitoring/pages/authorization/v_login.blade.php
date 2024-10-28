<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
  ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    @include("monitoring.pages.authorization.layouts.css.style-css")

</head>

<body>

    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center m-b-md custom-login">
                <h3>
                    Silahkan Login Terlebih Dahulu
                </h3>
                <p>
                    Hanya Administrator Yang Bisa Masuk Ke Halaman Monitoring
                </p>
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="#" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="Masukkan Username Anda" title="Please enter you username"
                                    required="" value="" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Masukkan Password Anda" placeholder="******"
                                    required="" value="" name="password" id="password" class="form-control">
                            </div>
                            <button class="btn btn-success btn-block loginbtn">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center login-footer">
                <p>
                    Copyright © 2024. All rights reserved.
                </p>
            </div>
        </div>
    </div>

    @include("monitoring.pages.authorization.layouts.js.style-js")

</body>

</html>
