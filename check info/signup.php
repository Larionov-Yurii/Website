<?php

session_start();

    include_once "../connection/coments_connection.php";

    $data = $_POST;

$login = filter_var(trim($data['login']), FILTER_SANITIZE_STRING);

$email = filter_var(trim($data['email']), FILTER_SANITIZE_STRING);

$password = filter_var($data['password'],FILTER_SANITIZE_STRING);

$password_2 = filter_var(($data['password_2']), FILTER_SANITIZE_STRING);

$password = password_hash($data['password'],PASSWORD_DEFAULT);


    if (isset($data['do_signup'])){
        $errors = array();
        if (trim($data['login']) == '')
        {
            $_SESSION['mes-login'] = 'Write login';
            $errors[] = $_SESSION['mes-login'];
            header('Location: ../Register page/register.php');

        }

        if (trim($data['email']) == '')
        {
            $_SESSION['mes-email'] = 'Write email';
            $errors[] = $_SESSION['mes-email'];
            header('Location: ../Register page/register.php');

        }

        if (($data['password']) == '')
        {
            $_SESSION['mes-pas'] = 'Write password';
            $errors[] = $_SESSION['mes-pas'];
            header('Location: ../Register page/register.php');

        }

        if (($data['password_2']) !=$data['password'])
        {
            $_SESSION['mes-pass'] = 'Password mismatch';
            $errors[] = $_SESSION['mes-pass'];
            header('Location: ../Register page/register.php');

        }


        $allusers = $Gcom->query("SELECT * FROM `new users` WHERE `login` = '$login'");
        $userss = $allusers->fetch();
        if($userss>0){
            $_SESSION['already-log'] = 'This login already in BD';
            $errors[] = $_SESSION['already-log'];
            header('Location: ../Register page/register.php');
        }


        $allemails = $Gcom->query("SELECT * FROM `new users` WHERE `email` = '$email'");
        $emails = $allemails->fetch();
        if($emails>0){
            $_SESSION['already-email'] = 'This email already in BD';
            $errors[] = $_SESSION['already-email'];
            header('Location: ../Register page/register.php');
        }


        if (empty($errors))
        {
            $query = "INSERT INTO `new users`(`login`, `email`, `password`) VALUES ('$login', '$email', '$password')";
            $user = $Gcom->prepare($query);
            $user->execute([
                'login' => $login,
                'email' => $email,
                'password' => $password,
            ]);
            $_SESSION['mes-good'] = 'You are registered ';
            header('Location: ../Register page/register.php');
        }

    }




