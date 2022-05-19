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
        <form class="form" id="login" action="newsmain2.php" method="POST">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Username or email" name="u_name">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" name="pass_c">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit" name="submit">Continue</button>
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a  href="lg2.php" id="createAccount">Don't have an account? Create account</a>
            </p>
        </form>

    </div>
    <script src="lgn.js"></script>
</body>