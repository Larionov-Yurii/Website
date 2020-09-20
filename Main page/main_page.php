<?php
        session_start();

     include_once "./check info/sessionid.php";

     include_once "./check info/allmaincomments.php";

     include_once "./check info/allreplycomments.php";

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>World Pro Devices</title>
    <link rel="stylesheet" href="./Css/Unholy.css">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital@1&display=swap" rel="stylesheet">
    <script src="./Jquery/jquery-3.4.1.js"></script>
    <script  src="./My%20js/For%20forms.js"></script>
</head>
<body>
<header>
    <div id="logo" onclick="slowScroll('#bigslider')">
        <span>WPG</span>
    </div>
    <div id="menu">
        <?php
            if (isset($_SESSION['all-good'])){
                echo '<a href="#shop" title="store" onclick="slowScroll(\'#shop\')">STORE</a>',
                '<a href="#advantages" title="advantages" onclick="slowScroll(\'#advantages\')">ADVANTAGES</a>',
                '<a href="#contacts" title="contacts" onclick="slowScroll(\'#contacts\')">CONTACTS</a>',
                '<a href="#Faq" title="Faq" onclick="slowScroll(\'#Faq\')">FAQ</a>',
                '<a href="./Personal%20area/admin_panel.php">'. $_SESSION['all-good']['login'] .'</a>';
            }else{
                echo '<a href="#shop" title="store" onclick="slowScroll(\'#shop\')">STORE</a>',
        '<a href="#advantages" title="advantages" onclick="slowScroll(\'#advantages\')">ADVANTAGES</a>',
        '<a href="#contacts" title="contacts" onclick="slowScroll(\'#contacts\')">CONTACTS</a>',
        '<a href="#Faq" title="Faq" onclick="slowScroll(\'#Faq\')">FAQ</a>',
        '<a href="Login%20open/login.php" title="Personal Area">LOGIN</a>';
            }
        ?>
    </div>
</header>

<div id="bigslider">
    <h1>Welcome to World Pro Devices</h1>
    <div id="slider">
        <input type="radio" name="slider" id="slide1" checked>
        <input type="radio" name="slider" id="slide2">
        <input type="radio" name="slider" id="slide3">
        <input type="radio" name="slider" id="slide4">
        <div id="slides">
            <div id="overflow">
                <div class="inner">
                    <div class="slide slide_1">
                        <div class="slide-content">
                            <img src="./Images/Msi-pc.jpg" id="image1" alt="">
                            <h2>Best gaming PC</h2>
                            <p id="description-slider">Touch link and come for buy </p>
                        </div>
                    </div>
                    <div class="slide slide_2">
                        <div class="slide-content">
                            <img src="./Images/Nvidia3.jpg" id="image2" alt="">
                            <h2>Nvidia video card</h2>
                            <p id="description-slider">New best video card for Ultra gaming</p>
                        </div>
                    </div>
                    <div class="slide slide_3">
                        <div class="slide-content">
                            <img src="./Images/Keyboard1.jpg" id="image3" alt="">
                            <h2>Hyperx mechanics keyboard</h2>
                            <p id="description-slider">Best mechanics keyboard for gaming</p>
                        </div>
                    </div>
                    <div class="slide slide_4">
                        <div class="slide-content">
                            <img src="./Images/Razer1.jpg" id="image4" alt="">
                            <h2>Razer Naga Thrinity mouse</h2>
                            <p id="description-slider">Best MMO mouse for good creating macros</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="controls">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
        </div>

        <div id="bullets">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
        </div>

    </div>
</div>


<div id="shop">
    <h2>Top best products </h2>
    <?php foreach ($products as $product) {?>
    <div class="img">
        <img src="./Images/<?=$product['image']?>" alt="" >
        <p><?=$product['title']?></p>
    </div>
    <?php }?>
</div>


<script>
    function slowScroll(id) {
        $('html, body').animate({
            scrollTop: $(id).offset().top
        }, 500);
    }

    $(document).on("scroll", function (){
        if ($(window).scrollTop() === 0)
            $("header").removeClass("fixed");
        else
            $("header").attr("class", "fixed");
    });
</script>

<div id="advantages">
    <div class="text">
        <h4>Advantages of gaming devices</h4>
        <span>Today, the market has a huge number of diverse "gaming" peripherals, but not all players understand why and who needs it.
            Video games place high demands not only on equipment inside the computer, but also on input devices.
            Therefore, the characteristics of gaming mice and keyboards are optimized in such a way as to provide the most convenient and accurate interaction with the virtual world.
            You can talk about this for a very long time, but let’s take the most basic parameters why ordinary game devices differ from standard computer devices.
            If we are talking about a mouse, then we immediately need to understand that in the gaming mouse installed laser or hybrid sensors and an increased number of dpi.
            For example, in a regular office mouse there may be 1000 - 2000 dpi, while in a gaming mouse there may be 8000 or 12000 dpi.
            Keyboards are mechanical and membrane, although there are also hybrid ones.
            If we briefly consider the difference between mechanical and membrane keypads, then their difference will be expressed in candles, because there is a membrane in the membrane ones and a candle under each button in the mechanical one that will affect the speed of pressing the key.
            Headphones have a special sound version 7.0 which helps to better distinguish noise in the game. </span>
    </div>
</div>








 <div id="contacts">
    <h5 id="h5-correct">GIVE US A FEEDBACK</h5>
    <h5 id="info-comments">ALL FEEDBACKS</h5>
    <div id="all-items">

        <?php
        if (isset($_SESSION['all-good'])){

            echo '<form id="form_input" method="post" action="./check%20info/comment.php">',
            '<label for="name" id="name-input">NAME<span>*</span></label><br>',
                '<input type="text" placeholder="Write your name" name="name" id="name" value="'. $_SESSION['all-good']['login'] .'" readonly><br>',
                '<input type="text"  name="user-id" id="name-user-id" value="'.$findid['id'].'" hidden><br>',
            '<input type="hidden" name="date"><br>',
            '<label for="message" id="message-input">COMMENT<span>*</span></label><br>',
            '<textarea placeholder="Please write your comment" name="message" id="message"></textarea><br>',
            '<div class="text-button-sub"><button type="submit" name="comment_Submit" id="send_mess" class="btn">COMMENT</button></div>',
            '</form>';
        }else{
            echo '<form id="form_input"  action="">',
            '<label for="name" id="name-input-unknown">Unknown<span>*</span></label><br>',
            '<input type="text" placeholder="You can`t do message" name="name" id="name" readonly><br>',
            '<input type="hidden" name="date"><br>',
            '<label for="message" id="message-input-unknown">Unknown<span>*</span></label><br>',
            '<textarea placeholder="If you want to create comment then you need to be registered" name="message" id="message" readonly></textarea><br>',
            '<div class="text-button-sub"><button type="button" name="comment_Submit" id="send_mess" class="btn" >UNUSED</button></div>',
            '</form>';
        }
        ?>

    </div>



    <div id="new-one">



        <?php foreach ($showcomn as $result){?>



            <?php

                if (isset($_SESSION['all-good'])) {


                    echo '<p id="user-comment-info">' . $result['name'] . ' ' . $result['date'] . '<br></p>',
                    '<div id="comment-user">',
                        '<p id="stealth-' . $result['id'] . '">' . $result['comment'] . '</p>',
                    '</div>',

                     '<form method="post" action="./check%20info/editsavechanges.php">';

                   if ($findid['id'] === $result['userID']) {

                    echo '<textarea id="id-edit-save-'.$result['id'].'" name="id-each-user" hidden readonly >'.$result['id'].'</textarea>',
                            '<textarea name="edit-comment"  id="edit-user-comment-'.$result['id'].'" class="edit-style" hidden >'.$result['comment'].'</textarea>',

                            '<textarea name="userid-edit-comment"  id="edit-userid-comment-'.$result['id'].'" class="edit-style" hidden >'.$result['userID'].'</textarea>',


                        '<div id="buttons-edit">',
                            '<button type="submit"  name="save-edit-comment"  id="save-edit-user-comment-'.$result['id'].'" hidden>Save</button>',
                            '<button type="button" onclick="cancelEdit('.$result['id'].')" id="cancel-edit-user-comment-'.$result['id'].'" hidden>Cancel</button>',
                        '</div>',

                        '<div id="buttons-forms">',
                            '<button type="button"  onclick="showForm('.$result['id'].')" id="open-edit-'.$result['id'].'" >Edit</button>',
                            '<button type="submit"  name="delete-edit-comment" id="delete-edit-'.$result['id'].'" >Delete</button>',
                        '</div>';

                   }

                   echo  '<div id="buttons-forms-reply">',
                        '<button type="button"  onclick="showformReply('.$result['id'].')" id="reply-edit-'.$result['id'].'" >Reply</button>',
                    '</div>',

                        '<textarea name="reply-userid"  id="comment-userid-reply" class="edit-style-user-id" readonly hidden>'.$findid['id'].'</textarea>',
                        '<textarea name="reply-user-name"  id="comment-name-reply" class="edit-style-user" readonly hidden>'.$_SESSION['all-good']['login'].'</textarea>',


                        '<textarea id="reply-save-comment'.$result['id'].'" name="reply-comment-id" hidden>'.$result['id'].'</textarea>',

                    '<input type="hidden" name="reply-user-date">',

                        '<textarea name="reply-comment"  id="reply-text-'.$result['id'].'" class="edit-style-reply" hidden ></textarea>',

                    '<div id="reply-buttons">',
                        '<button type="submit" name="save-reply-comment"  id="save-reply-edit-'.$result['id'].'" hidden>Save</button>',
                        '<button type="button" onclick="cancelReply('.$result['id'].')" id="cancel-reply-edit-'.$result['id'].'" hidden>Cancel</button>', '<br>',
                    '</div>';


                    foreach ($showreplycom as $resultreply) {
                        echo '<div id="show-comments-reply">',
                            '<button type="button" onclick="showallReply(' . $resultreply['id'] . ')" id="show-reply-all-' . $resultreply['id'] . '" class="all_reply_button">Show all comments</button>',
                            '<button type="button" onclick="closeallReply(' . $resultreply['id'] . ')" id="close-reply-all-' . $resultreply['id'] . '" class="close_reply_button" hidden>Close all comments</button>',
                        '</div>',

                        '<div id="new_box_reply">',
                            '<p id="all-reply-com-' . $resultreply['id'] . '" class="reply_box" hidden>' . $resultreply['name'] . ' ' . $resultreply['date'] . '<br>' . $resultreply['comment'] . '</p>',
                        '</div>';
                }

                    '</form>';


                } else {

                    echo '<p id="user-comment-info">' . $result['name'] . ' ' . $result['date'] . '<br></p>',
                    '<div id="comment-user">',
                        '<p id="stealth-' . $result['id'] . '">' . $result['comment'] . '</p>',
                    '</div>';

                    foreach ($showreplycom as $resultreply) {
                        echo '<div id="show-comments-reply">',
                            '<button type="button" onclick="showallReply(' . $resultreply['id'] . ')" id="show-reply-all-' . $resultreply['id'] . '" class="all_reply_button">Show all comments</button>',
                            '<button type="button" onclick="closeallReply(' . $resultreply['id'] . ')" id="close-reply-all-' . $resultreply['id'] . '" class="close_reply_button" hidden>Close all comments</button>',
                        '</div>',

                        '<div id="user-comment-info">',

                            '<p id="all-reply-com-' . $resultreply['id'] . '" class="reply_box" hidden> ' . $resultreply['name'] . ' ' . $resultreply['date'] . '<br>' . $resultreply['comment'] . '</p>',

                        '</div>';
                    }

            }

            ?>


        <?php }?>




    </div>
</div>



<div id="Faq">
    <h5 id="h5-Faq">FREQUENTLY ASKED QUESTIONS</h5>
    <div>
        <span class="titles">Gaming mouses</span><br>
        <span class="heading">Which can be types of sensors ?</span>
        <p>Nowadays, there are 3 types of sensors: laser, hybrid and optical</p>
        <span class="heading">What is the best type of sensor for a gaming mouse?</span>
        <p>  It is generally accepted that a laser mouse sensor is better than an optical one, but in reality it all depends on the tasks performed on the computer.
            If the mouse requires absolutely accurate positioning at any speed of its movement, then the advantages of optical mouse.
            For this reason, optical mice are best suited for professional gamers, designers, and photographers.
            Typically, optical manipulators group gaming mouse into a group, since it is gamers who are their main customers.
            If the mouse requires versatility, that is, work on any surface and sufficiently high accuracy,
            it is preferable to use devices with laser sensors, popular among beginner gamers, office workers and among those who travel a lot with a laptop.</p>
        <span class="heading">Which can be the types of gaming mouses?</span>
        <p>In our time, there are special mouse for various video games, for example, for shooters they often take them without a side panel with buttons,
            so that it would not hinder the hand to enter the mouse on the carpet. But with side buttons, this is for MMO games where you need to create many macros to apply
            a large number of tasks in a game of this genre</p>
    </div>
    <div>
        <span class="titles">Gaming keyboards</span><br>
        <span class="heading">Which can be the types of keyboards?</span>
        <p>Keyboards are: mechanical and membrane </p>
        <span class="heading">What is the difference between a mechanical keyboard and a membrane?</span>
        <p>Membrane keyboard is a three-layer rubber or silicone gasket, laid on top of electronic contacts.
            Over the entire surface, the gasket is dotted with protruding “caps” on which buttons with a plastic core are attached.
            A key is triggered when the rod presses the membrane to the contacts, i.e. full press required.
            In the mechanical keyboard, each key is equipped with an individual switching mechanism, which works approximately in the middle of the button stroke.</p>
        <span class="heading">What is better mechanical keyboard or membrane?</span>
        <p>It all depends on your goals and capabilities, for example, in the membrane keyboard there is a membrane that has 10 million keystrokes on all keys,
            while in the mechanical keyboard under each button there is a candle and each candle has about 20 - 50 million keystrokes.
            But at the same time, the mechanical keyboard has a minus, it is noisy and therefore, if you want to play at night,
            you should know someone will play with you as they simply will not be able to fall asleep while the membrane keyboard is almost silent compared to the mechanical one.</p>
    </div>
    <div>
        <span class="titles">Stuffing for iron</span><br>
        <span class="heading">What is needed for a good gamer?</span>
        <p>An avid player from an amateur is distinguished not only by a powerful PC, but also by special peripherals, a headset that provides immersion in the game, and gives a number of tactical advantages</p>
        <span class="heading">What is better gaming laptop or computer?</span>
        <p>This is a very philosophical question since many players or hardware lovers cannot give an answer to it,
            since it all depends on the situation; someone will say better than a PC than a laptop.
            It can always be supplemented by something with various fillings while with a laptop it will be simply inconvenient or
            someone wants to ride around the world and it is easier for him to take a laptop than to bring an entire PC with him on the road.</p>
        <span class="heading">Which are the best brands?</span>
        <p>Each brand has its own characteristics Razer, Hyperx, MSI, Lenovo, HP, Acer and others. It all depends on your style and taste.</p>
    </div>
</div>

<footer>
    <p class="Label">
        United Pro Gamers
    </p>
    <div class="social">
        <a href="https://www.instagram.com/?hl=ru"><img src="./Images/Instagram.png" alt="" width="50px" height="50px"></a>
        <a href="https://uk-ua.facebook.com/"><img src="./Images/Facebook.png" alt="" width="50px" height="50px"></a>
        <a href="https://twitter.com/explore"><img src="./Images/Twiter.png" alt="" width="50px" height="50px"></a>
        <a href="https://www.pinterest.com/"><img src="./Images/pinterest.png" alt="" width="50px" height="50px"></a>
    </div>
    <p class="Label-text">
        Copyright © 2020 UPG Inc.
    </p>
</footer>

</body>
</html>