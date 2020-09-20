<?php
        session_start();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../Css/Loginstyle.css">
    <script src="../Jquery/jquery-3.4.1.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div id="logo">
        <a href="../index.php"><span>WPG</span></a>
    </div>
</header>

<div id="Login-main">
    <h5 id="h5-correct">LOGIN</h5>
    <div id="all">
        <form id="form_input" action="../check%20info/finders.php" method="post">
            <label>
                <input type="text" placeholder="LOGIN" name="login" id="login"><br>
            </label>
            <label>
                <input type="password" placeholder="PASSWORD" name="password" id="password"><br>
            </label>
                <div class="text-button"><button type="submit" name="do_login" id="send_mess" class="btn">Sign in</button></div>
            <div class="register" id="reg-link">
                <a href="../Register%20page/register.php"><span>Register</span></a>
            </div>
        </form>
    </div>
    <?php
    if (isset($_SESSION['wrong-log'])){
        echo '<p class = "wrong-login">' . $_SESSION['wrong-log'] . '</p>';
    }
    unset($_SESSION['wrong-log']);
    ?>

    <?php
    if (isset($_SESSION['wrong-pass'])){
        echo '<p class = "wrong-login">' . $_SESSION['wrong-pass'] . '</p>';
    }
    unset($_SESSION['wrong-pass']);
    ?>


    <?php
    if (isset($_SESSION['wrong-logs'])){
        echo '<p class = "wrong-login">' . $_SESSION['wrong-logs'] . '</p>';
    }
    unset($_SESSION['wrong-logs']);
    ?>
</div>
</body>
</html>
