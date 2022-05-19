<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="lg.css">
</head>

<body>
    <div class="container">

        <form class="form form--hidden" id="createAccount" action="sigup.php"  method="POST">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username"
                    name="u_name">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email Address" name="email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" name="pass">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password" name="pass_c">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="Submit" name="submit">Continue</button>
            <p class="form__text">
                <a  href="lg1.php" id="login">Already have an account? Sign in</a>
            </p>
        </form>
    </div>
    <script src="lgn.js"></script>
</body>