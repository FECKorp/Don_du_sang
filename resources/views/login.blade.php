<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("login-form-07/fonts/icomoon/style.css") }}">

    <link rel="stylesheet" href="{{ asset("login-form-07/css/owl.carousel.min.css") }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("login-form-07/css/bootstrap.min.css") }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset("login-form-07/css/style.css") }}">

    <title>Login #7</title>
</head>
<body>



<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset("login-form-07/images/undraw_result_re_uj08.svg") }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3>Connectez-vous</h3>
                            <p class="mb-4">Vous pouvez vous connecter avec vos codes du lycée.</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group first">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>

                            </div>
                            <br>
                            <div class="form-group last mb-4">
                                <label for="password">{{ __('Password') }}</label>
                                <input class="form-control" id="password" type="password" name="password" required autocomplete="current-password">
                            </div>

                            <input type="submit" value="{{ __('Log in') }}" class="btn btn-block btn-danger">

                            <br>

                            <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script src="{{ asset("login-form-07/js/jquery-3.3.1.min.js") }}"></script>
<script src="{{ asset("login-form-07/js/popper.min.js") }}"></script>
<script src="{{ asset("login-form-07/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("login-form-07/js/main.js") }}"></script>
</body>
</html>
