<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
    <div class="background_login">
    <div class="login_container">
        <h2>Login</h2>
        <form action="./includes/login.inc.php" method="post">
            <div class="input_login_container">
                <i class="bi bi-people loginIcon"></i><input name="username" class="login_inpt" placeholder="Insert Your Username" type="text">
            </div>
            <div class="input_login_container">
                <i class="bi bi-key loginIcon"></i><input name="password" class="login_inpt" placeholder="Insert Your Password" type="password">
            </div>
            <button type="submit" class="login_btn" name="login">Login</button>
        </form>
        <a href="./register.php" class="signup_link">Sign up Now.</a>
    </div>
    </div>
</body>
</html>