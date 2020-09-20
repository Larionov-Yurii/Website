<?php

date_default_timezone_set('Europe/Kiev');
include_once "../connection/coments_connection.php";

if (isset($_POST['comment_Submit'])){
    $userID = $_POST['user-id'];
    $name = $_POST['name'];
    $date = date('Y-m-d H:i:s');
    $message = $_POST['message'];

    $maincomtable = "INSERT INTO `comments`(`userID`,`name`, `comment`, `date`) VALUES ('$userID','$name', '$message', '$date')";
    $result = $Gcom->prepare($maincomtable);
    $result->execute([
        'user-id' => $userID,
        'name' => $name,
        'message' => $message,
        'date' => $date,
    ]);
    header('Location: ../index.php#contacts');
}



