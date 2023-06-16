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
    <div class="container signUp">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="/register" class="sign-up-form" method="post">
                    @csrf
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input placeholder="Name" type="text"
                            class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                            required value="{{ old('name') }}" autofocus>
                    </div>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input placeholder="Username" type="text"
                            class="form-control @error('username') is-invalid @enderror" name="username" id="username"
                            required value="{{ old('username') }}" autofocus>
                    </div>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-envelope-open"></i>
                        <input placeholder="Email" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                            required value="{{ old('email') }}" autofocus autocomplete="off">
                    </div>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input placeholder="Password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            id="password-signup" required value="{{ old('password') }}" autofocus>
                        <i class="fas fa-eye" id="show-password-signup"></i>
                        <i class="fas fa-eye-slash" id="hide-password-signup"></i>
                    </div>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div>
                        <button class="btn transparent" id="sign-in-btn"><a href="/login" class="text-decoration-none"
                                style="color: white;">Sign in</a></button>
                        <button type="submit" class="btnSignUp">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/SignUp.js') }}"></script>
</body>

</html>
