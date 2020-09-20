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
    <title>Register</title>
    <link rel="stylesheet" href="../Css/Registrstyle.css">
    <script src="../Jquery/jquery-3.4.1.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div id="logo">
        <a href="../index.php"><span>WPG</span></a>
    </div>
</header>
<div id="Register-main">
    <h5 id="h5-correct">REGISTER</h5>
    <div id="all">
        <form id="form_input" action="../check%20info/signup.php" method="post" enctype="multipart/form-data">
            <label>
                <input type="text" placeholder="Write login" name="login" id="login" ><br>
            </label>
            <label>
                <input type="email" placeholder="Write email" name="email" id="email" ><br>
            </label>
            <label>
                <input type="password" placeholder="Write password" name="password" id="password" ><br>
            </label>
            <label>
                <input type="password" placeholder="Write your password again" name="password_2" id="password_2" ><br>
            </label>
                <div class="text-button"><button type="submit" name="do_signup" id="send_mess" class="btn">Submit</button></div>
        </form>
    </div>

    <?php
    if (isset($_SESSION['mes-login'])){
        echo '<p class = "wrong-pass">' . $_SESSION['mes-login'] . '</p>';
    }
    unset($_SESSION['mes-login']);
    ?>

    <?php
    if (isset($_SESSION['mes-email'])){
        echo '<p class = "wrong-pass">' . $_SESSION['mes-email'] . '</p>';
    }
    unset($_SESSION['mes-email']);
    ?>

    <?php
    if (isset($_SESSION['mes-pas'])){
        echo '<p class = "wrong-pass">' . $_SESSION['mes-pas'] . '</p>';
    }
    unset($_SESSION['mes-pas']);
    ?>

    <?php
    if (isset($_SESSION['mes-pass'])){
        echo '<p class = "wrong-pass">' . $_SESSION['mes-pass'] . '</p>';
    }
    unset($_SESSION['mes-pass']);
    ?>

    <?php
    if (isset($_SESSION['mes-good'])){
        echo '<p class = "wrong-pass">' . $_SESSION['mes-good'] . '</p>';
    }
    unset($_SESSION['mes-good']);
    ?>

    <?php
    if (isset($_SESSION['already-log'])){
        echo '<p class = "wrong-pass">' . $_SESSION['already-log'] . '</p>';
    }
    unset($_SESSION['already-log']);
    ?>

    <?php
    if (isset($_SESSION['already-email'])){
        echo '<p class = "wrong-pass">' . $_SESSION['already-email'] . '</p>';
    }
    unset($_SESSION['already-email']);
    ?>

</div>
</body>
</html>
