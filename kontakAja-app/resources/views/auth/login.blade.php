<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styleLogin.css" />
    <title>LOGIN</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" method="post" class="sign-in-form" id="signIn">
                    @csrf
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input placeholder="Email" type="email" name="email"
                            class="@error('email') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp" autofocus required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <i class="fas fa-eye" id="show-password"></i>
                        <i class="fas fa-eye-slash" id="hide-password"></i>
                    </div>
                    <button type="submit" value="Login" class="btn solid">Login</button>
                    {{-- <input type="submit" value="Login" class="btn solid"/> --}}
                    <a class="choice" href="/forgot-password">Forgot password?</a>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Baru di App ini?</h3>
                    <p>
                        Jika baru gunakan aplikasi ini, SignUp untuk akses fitur-fitur. Dengan mendaftar, nikmati
                        manfaat lengkap yang disediakan aplikasi ini
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        <a href="/register" class="text-decoration-none">Sign up</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="js/SignInSignUp.js"></script> --}}
</body>

</html>
