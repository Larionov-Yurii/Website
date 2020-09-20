<?php

if (isset($_SESSION['all-good'])){
    include_once "./connection/coments_connection.php";
    $findid = $Gcom->query("SELECT `id` FROM `new users` WHERE `login` = '".$_SESSION['all-good']['login']."' ");
    $findid = $findid->fetch();
}

