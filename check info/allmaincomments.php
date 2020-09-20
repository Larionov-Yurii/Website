<?php

    include_once "./connection/coments_connection.php";

    $showcomn = $Gcom->query("SELECT * FROM `comments` ORDER BY date DESC ");
    $showcomn = $showcomn->fetchAll();

    $certainuser = $Gcom->query("SELECT name, comment, DATE_FORMAT( comments.date, '%Y-%m-%d' ) AS date FROM `comments` INNER JOIN `new users` ON comments.userID = `new users`.id");
