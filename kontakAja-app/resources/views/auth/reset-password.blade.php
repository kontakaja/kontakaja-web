<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/styleLogin.css') }}"/>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <title>{{ $title }}</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ route('password.update') }}" method="post" class="sign-in-form" id="signIn">
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
                    <h2 class="title">Reset Password</h2>
                    <input type="hidden" name="token" value="{{ request()->token }}">
                    <input type="hidden" name="email" value="{{ request()->email }}">
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Enter New Password" id="password-reset" name="password" />
                        <i class="fas fa-eye" id="show-password-reset"></i>
                        <i class="fas fa-eye-slash" id="hide-password-reset"></i>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Ulangi Password" id="password-ulangi"
                            name="password_confirmation" />
                        <i class="fas fa-eye" id="show-password-ulangi"></i>
                        <i class="fas fa-eye-slash" id="hide-password-ulangi"></i>
                    </div>
                    <input type="submit" value="Reset Password" class="btn solid" />
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/ForgetReset.js') }}"></script>
</body>

</html>
