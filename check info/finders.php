<?php
session_start();

include_once "../connection/coments_connection.php";

$data = $_POST;

$login = filter_var(trim($data['login']), FILTER_SANITIZE_STRING);
$pass = filter_var($data['password'],FILTER_SANITIZE_STRING);



if (isset($data['do_login']))
{
    $errors = array();
    $finduser = $Gcom->query("SELECT * FROM `new users` WHERE `login` = '$login'");
    $finder = $finduser->fetch();
    if ($finder==0)
    {
        $_SESSION['wrong-log'] = 'Wrong login ';
        $errors[] = $_SESSION['wrong-log'];
        header('Location: ../Login open/login.php');

    }

    
    if (password_verify($pass, $finder['password']))
    {
        $_SESSION['all-good'] = ['login' => $finder['login']];

        header('Location: ../Personal area/admin_panel.php');

    }else{
        $_SESSION['wrong-logs'] = 'Wrong Password';
        $errors[] = $_SESSION['wrong-logs'];
        header('Location: ../Login open/login.php');
    }


}


