<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./../Login/assets/icons/PHP.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>PHP - Login</title>
</head>

<body>
    <main class="container">
        <!--Register Form-->

        <form action="./php/register.php" method="post" class="form-register form-active">
            <img src="./../Login/assets/icons/PHP.png" alt="PHP Logo" class="logo">

            <div class="input_container">
                <label for="name" class="label">Username:</label>
                <input type="text" name="name" id="name" class="input" required placeholder="Write the username" autocomplete="off">
            </div>

            <div class="input_container">
                <label for="email" class="label">Email:</label>
                <input type="email" name="email" id="email" class="input" required placeholder="Write your email address" autocomplete="off">
            </div>

            <div class="input_container">
                <label for="password" class="label">Password:</label>
                <input type="password" name="password" id="password" class="input" required placeholder="Write your password" autocomplete="off">
            </div>

            <input type="submit" value="Register" class="submit">

            <p class="form-switch-text">If you already have an account <span class="form-switch-login-btn">Log In</span></p>
        </form>

        <!--Login Form-->

        <form action="./php/login.php" method="post" class="form-login form-inactive">
            <img src="./../Login/assets/icons/PHP.png" alt="PHP Logo" class="logo">

            <div class="input_container">
                <label for="email" class="label">Email:</label>
                <input type="email" name="email" id="email" class="input" required placeholder="Write your email address" autocomplete="off">
            </div>

            <div class="input_container">
                <label for="password" class="label">Password:</label>
                <input type="password" name="password" id="password" class="input" required placeholder="Write your password" autocomplete="off">
            </div>

            <input type="submit" value="Log In" class="submit">

            <p class="form-switch-text">If you don't have an account <span class="form-switch-register-btn">Register</span></p>
        </form>
    </main>

    <!--JS-->
    <script src="./../Login/js/main.js"></script>
</body>

</html>