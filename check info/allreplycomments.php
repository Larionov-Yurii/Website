<?php

    include_once "./connection/coments_connection.php";

    $showreplycom = $Gcom->query("SELECT * FROM `replycom` ORDER BY date DESC ");
    $showreplycom = $showreplycom->fetchAll();

    $certaincom = $Gcom->query("SELECT `replycom`.id, name, comment, DATE_FORMAT( replycom.date, '%Y-%m-%d' ) AS date FROM `replycom` INNER JOIN `new users` ON replycom.userID = `new users`.id ORDER BY `replycom`.id DESC");
