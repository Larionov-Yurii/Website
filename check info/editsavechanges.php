<?php

date_default_timezone_set('Europe/Kiev');
include_once "../connection/coments_connection.php";


if (isset($_POST['save-edit-comment'])){

    $id = $_POST['id-each-user'];
    $comments = $_POST['edit-comment'];
    $edituserid = $_POST['userid-edit-comment'];
    $system = "UPDATE `comments` SET `comment` = '$comments', `userID` = '$edituserid' WHERE `id` = '$id' ";

    $resultos = $Gcom->prepare($system);
    $resultos->execute([
        'edit-comment' => $comments,
        'userid-edit-comment'=> $edituserid,
        'id-each-user' => $id,
    ]);
    header('Location: ../index.php#contacts');


}


if (isset($_POST['delete-edit-comment'])){
    $iddel = $_POST['id-each-user'];
    $delsystem = "DELETE FROM `comments` WHERE `id` = '$iddel' ";
    $delresult = $Gcom->query($delsystem);
    header('Location: ../index.php#contacts');

}


if (isset($_POST['save-reply-comment'])){
    $commentID = $_POST['reply-comment-id'];
    $name = $_POST['reply-user-name'];
    $userID = $_POST['reply-userid'];
    $comment = $_POST['reply-comment'];
    $data = date('Y-m-d H:i:s');

    $replyBase = "INSERT INTO `replycom`(`commentID`, `name`, `comment`, `date`, `userID`) VALUES ('$commentID', '$name', '$comment', '$data', '$userID')";
    $resultReply = $Gcom->prepare($replyBase);
    $resultReply->execute([
        'reply-comment-id' => $commentID,
        'reply-user-name' => $name,
        'reply-comment' => $comment,
        'reply-user-date' => $data,
        'reply-userid' => $userID,
    ]);
    header('Location: ../index.php#contacts');

}


