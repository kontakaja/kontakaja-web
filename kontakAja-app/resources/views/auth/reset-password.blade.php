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
                <form action="#" class="sign-in-form" id="signIn">
                    <h2 class="title">Reset Password</h2>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Enter New Password" id="password-reset" name="password" />
                        <i class="fas fa-eye" id="show-password-reset"></i>
                        <i class="fas fa-eye-slash" id="hide-password-reset"></i>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Ulangi Password" id="password-ulangi" name="password" />
                        <i class="fas fa-eye" id="show-password-ulangi"></i>
                        <i class="fas fa-eye-slash" id="hide-password-ulangi"></i>
                    </div>
                    <input type="submit" value="Reset Password" class="btn solid" />
                </form>
            </div>
        </div>
    </div>
    <script src="js/ForgetReset.js"></script>
</body>

</html>
