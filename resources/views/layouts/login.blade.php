<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('public/bower_components/dist/images/favicon.ico')}}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/bower_components/dist/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/bower_components/dist/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/bower_components/dist/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/bower_components/dist/css/animate.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/bower_components/dist/css/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/bower_components/dist/css/animsition.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/bower_components/dist/css/select2.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/bower_components/dist/css/daterangepicker.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/bower_components/dist/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/bower_components/dist/css/main.css')}}">
<!--===============================================================================================-->
<meta name="robots" content="noindex, follow">
</head>
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-10">
                <form method="post" action="{{ url('/login')}}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title p-b-20">
                        Welcome
                    </span>
                    <span class="login100-form-avatar">
                        <img src="{{ asset('public/bower_components/dist/images/avatar-01.webp')}}" alt="AVATAR">
                    </span>
                    @include('layouts.message')
                    <div class="wrap-input100 validate-input m-t-50 m-b-20" data-validate = "Enter username">
                        <input class="input100" type="text" name="email" value="{{ old('email')}}">
                        <span class="focus-input100" data-placeholder="Username"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-40" data-validate="Enter password">
                        <input class="input100" type="password" name="password" value="{{ old('password')}}">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <ul class="login-more p-t-100">
                        <li class="m-b-8">
                            <span class="txt1">
                                Forgot
                            </span>

                            <a href="#" class="txt2">
                                 Password?
                            </a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
    <script src="{{ asset('public/bower_components/dist/js/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('public/bower_components/dist/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('public/bower_components/dist/js/popper.js')}}"></script>
    <script src="{{ asset('public/bower_components/dist/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('public/bower_components/dist/js/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('public/bower_components/dist/js/moment.min.js')}}"></script>
    <script src="{{ asset('public/bower_components/dist/js/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('public/bower_components/dist/js/countdowntime.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('public/bower_components/dist/js/main.js')}}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>
    @stack('script')
</body>
</html>