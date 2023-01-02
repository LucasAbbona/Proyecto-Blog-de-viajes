
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./styles/landing_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body class="home_back">
    <a class="BackTop" href="#Home"><i class="bi bi-arrow-up-circle"></i></a>
    <div class="landing_bg">
        <div class="landing_blur">
            <nav id="Home" class="navegation">
            <ul>
            <li class="userName"><a href="#">Welcome back <strong><?php session_start(); echo $_SESSION['username']; ?></strong></a></li>
            <li><a href="">Home</a></li>
            <li><a href="./admin.php">Admin</a></li>
            <li><a href="./includes/logout.php">Log Out</a></li>
            </ul>
            </nav>
            <div class="home">
                <h1 >MY TRAVEL BLOG</h1>
                <p class="home_desc">typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="dest_card">
                <img src="./images/verticalhome.jpg" alt="">
                <h3>AUGUST</h3>
            </div>
        </div>
    </div>
    <div class="posts_section">
        <h2>POSTS</h2>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
    </div>
    <?php 
        include "./classes/connection.class.php";
        include "./classes/posts.class.php"; 
        include "./controller/postContr.php"; 
        $posts=new PostContr("","","",""); 
        $posts->DisplayContent(); ?>
        </div>
    <div class="login_card">
        <div class="login_card_blur">
        <h3>LOG IN AND START SHARING YOUR OWN CONTENT.</h3>
        <div class="btns">
            <a class="signup_btn" href="./register.php">SING UP</a>
            <a class="login_btn" href="./index.php">LOG IN</a>
        </div>
        </div>
    </div>
</body>
</html>
