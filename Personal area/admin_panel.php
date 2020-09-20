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
    <link rel="stylesheet" href="../Css/adminstyle.css">
    <script src="../Jquery/jquery-3.4.1.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div id="logo">
        <a href="../index.php"><span>WPG</span></a>
        <a href="../check%20info/logout_user.php"  class="btn"><span id="logout-button">Logout</span></a>
    </div>
</header>
<form id="visiting">
    <?php
    if (isset($_SESSION['all-good'])){
        echo '<p class = "wrong-login">'. 'Welcome to your personal area ' . $_SESSION['all-good']['login'] . '</p>';
    }
    ?>
</form>

</body>
</html>
