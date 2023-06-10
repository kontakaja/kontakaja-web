<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/styleLogin.css') }}"/>
    <title>{{ $title }}</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form" id="signIn" method="post">
                    @csrf
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if (session()->has('status'))
                        <div class="alert alert-success">
                            {{ session()->get('status') }}
                        </div>
                    @endif
                    @if (session()->has('failed'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('failed') }}
                        </div>
                    @endif
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input placeholder="Email" type="email" name="email"
                            class="@error('email') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp" autofocus required value="{{ old('email') }}"
                            autocomplete="off">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <i class="fas fa-eye" id="show-password"></i>
                        <i class="fas fa-eye-slash" id="hide-password"></i>
                    </div>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <button type="submit" class="btn solid">Login</button>
                    <button class="btn in" id="sign-up-btn"><a href="/register" class="text-decoration-none"
                            style="color: white;">Sign up</a></button>
                    <a class="choice" href="/forgot-password">Forgot password?</a>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/SignIn.js') }}"></script>
</body>

</html>
