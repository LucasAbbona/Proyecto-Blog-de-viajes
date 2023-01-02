<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
<div class="back">
    <div class="signup-bg"></div>
    <div class="signup-form">
    <h2>Sign Up</h2>
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
    <form action="./includes/signup.inc.php" method="post">
    <div class="input-container">
    <i class="bi bi-person input-img"></i><input type="text" placeholder="Insert Username" name="username">
    </div>
    <div class="input-container">
    <i class="bi bi-envelope input-img"></i><input type="email" placeholder="Insert E-Mail" name="email">
    </div>
    <div class="input-container">
    <i class="bi bi-key input-img" ></i><input type="password" placeholder="Insert Password" name="pwd">
    </div>
    <div class="input-container">
    <i class="bi bi-key input-img"></i><input type="password" placeholder="Repeat Password" name="pwdRepeat">
    </div>
    <button class="signup-btn" name="register">Register</button>
    </form>
    <a href="./index.php" class="login_link">I already have an account.</a>
    <p class="copyright">2022 © Lucas Abbona</p>
    </div>
</div>
</body>
</html>