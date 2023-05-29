<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styleLogin.css" />
    <title>Forgot Password</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ route('password.email') }}" method="post" class="sign-in-form" id="signIn">
                    @csrf
                    @if (session()->has('status'))
                        <div class="alert alert-success">
                            {{ session()->get('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h2 class="title">Lupa Password?</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" autofocus autocomplete="off" />
                    </div>
                    <input type="submit" value="Reset Password" class="btn solid" />
                    <a class="choice" href="/login">Sign in?</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KontakAja!!">

    <!-- ========== Page Title ========== -->
    <title>Forgot Password</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="css/style3.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-md-4">
            @if (session()->has('status'))
                <div class="alert alert-success m-3">
                    {{ session()->get('status') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger m-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <main>
                <h1 class="h2 m-3 fw-normal text-center">Forgot Your Password</h1>
                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email">
                      <input type="submit" value="Request Password Reset" class="btn btn-primary w-100 mt-3">
                </form>
            </main>
        </div>
    </div>
</body>
</html> --}}
