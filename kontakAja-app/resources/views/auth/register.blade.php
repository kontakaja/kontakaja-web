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
                <form action="/register" class="sign-up-form">
                    @csrf
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input placeholder="Name" type="text"
                            class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                            required value="{{ old('name') }}" autofocus>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input placeholder="Username" type="text"
                            class="form-control @error('username') is-invalid @enderror" name="username" id="username"
                            required value="{{ old('username') }}" autofocus>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope-open"></i>
                        <input placeholder="Email" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                            required value="{{ old('email') }}" autofocus>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input placeholder="Password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" id="password_signup"
                            required value="{{ old('password') }}" autofocus>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <i class="fas fa-eye" id="show-password-signup"></i>
                        <i class="fas fa-eye-slash" id="hide-password-signup"></i>
                    </div>
                    <button type="submit" class="btnSignUp" value="Sign up">Sign Up</button>
                    {{-- <input type="submit" class="btnSignUp" value="Sign up"/> --}}
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah Memiliki Akun?</h3>
                    <p>
                        Jika sudah punya akun, SignIn untuk akses fitur-fitur. Dengan masuk, mudah lanjutkan penggunaan
                        dan manfaatkan semua fitur yang ada sesuai kebutuhan.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        <a href=""></a> Sign in
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="js/SignInSignUp.js"></script> --}}
</body>

</html>
