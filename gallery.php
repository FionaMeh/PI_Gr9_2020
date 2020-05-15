<?php

$background_colors = array('#d98cb3', '#b3b3ff', '#ff884d', '#99ccff', '#ff6666');

$rand_background = $background_colors[array_rand($background_colors)];

?>


<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Gallery album</title>
    <link rel="stylesheet" href="views/stiliG.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <style>
        .wrapper {
            width: 45%;
            height: auto;
            margin: 10px auto;
            border: 1px solid #cbcbcb;
            background: white;
        }

        /*
        * COMMENT FORM
        **/
        .comment_form {
            width: 80%;
            margin: 100px auto;
            border: 1px solid green;
            background: #fafcfc;
            padding: 20px;
        }

        .comment_form label {
            display: block;
            margin: 5px 0px 5px 0px;
        }

        .comment_form input, textarea {
            padding: 5px;
            width: 95%;
        }

        #submit_btn, #update_btn {
            padding: 8px 15px;
            color: white;
            background: #339;
            border: none;
            border-radius: 4px;
            margin-top: 10px;
        }

        #update_btn {
            background: #1c7600;
        }

        /*
        * COMMENT DISPLAY AREA
        **/
        #display_area {
            width: 90%;
            padding-top: 15px;
            margin: 10px auto;
        }

        .comment_box {
            cursor: default;
            margin: 5px;
            border: 1px solid #cbcbcb;
            padding: 5px 10px;
            position: relative;
        }

        .delete {
            position: absolute;
            top: 0px;
            right: 3px;
            color: red;
            display: none;
            cursor: pointer;
        }

        .edit {
            position: absolute;
            top: 0px;
            right: 45px;
            color: green;
            display: none;
            cursor: pointer;
        }

        .comment_box:hover .edit, .comment_box:hover .delete {
            display: block;
        }

        .comment_text {
            text-align: justify;
        }

        .display_name {
            color: blue;
            padding: 0px;
            margin: 0px 0px 5px 0px;
        }
    </style>

</head>

<header>
    <?php include('views/header.php'); ?>
</header>

<body style="background: <?php echo $rand_background;
echo $_SERVER['PHP_SELF'];
?>;">


<div class="container">
    <div class="box">
        <div class="imgBox">
            <a href="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-540x360/06/6b/80/0d.jpg"><img
                        src="images/download.jpg" width=400px height=300px></a></div>
        <div class="content">
            <h2>Theth, Shqiperi</h2>
            <p>Spend the weekend in the open air, be guests of the nature<br>
                Two nights, only 40€, meals included<br>
                One night 30€, meals included<br><br>
                CONTACT US FOR MORE INFO</p>
        </div>
    </div>

    <div class="box">
        <div class="imgBox">
            <a href="https://www.botasot.info/media/botasot.info/images/2019/September/18/styr1568783375.jpg"><img
                        src="images/syriKalter.jpg" width=400px height=300px></a></div>
        <div class="content">
            <h2>Syri i Kalter, Shqiperi</h2><br>
            <p>Join us for a one day trip and<br>
                see the pearl of the country</p>
        </div>
    </div>
    <div class="box">
        <div class="imgBox">
            <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/2013-10-05_Valbona%2C_Albania_8265.jpg/1200px-2013-10-05_Valbona%2C_Albania_8265.jpg"><img
                        src="images/valbona.jpg" width=400px height=300px></div>
        </a>
        <div class="content">
            <h2>Valbona, Shqiperi</h2>
            <p>Want to find pece of mind?<br>
                Every weekend we organize trips to Valbona<br>
                Contact us for more info</p>
        </div>
    </div>
    <div class="box">
        <div class="imgBox">
            <a href="https://upload.wikimedia.org/wikipedia/commons/6/6c/Permet.jpg"><img src="images/permet.jpg"
                                                                                          width=400px height=300px></a>
        </div>
        <div class="content">
            <h2>Permet, Shqiperi</h2>
            <p>Visit this beautiful sight in Gjirokaster.<br>
                Bus rides every Saturday at 9am<br>
                Contact us for the expensess<br>

            </p>
        </div>
    </div>
    <div class="box">
        <div class="imgBox">
            <a href="https://i.redd.it/q6exs9969ze01.jpg"><img src="images/liqenati.jpg" width=400px height=300px></a>
        </div>
        <div class="content">
            <h2>Peje, Kosove</h2>
            <p>Wanna get an exercisse but also calm your mind and eye<br>
                Get your tent and join us on our trip to Liqenati in Peja, <br>
                you wont regret it!!
            </p>
        </div>
    </div>
    <div class="box">
        <div class="imgBox">
            <a href="http://www.takeadventure.com/wp-content/uploads/2016/11/157_gjeravica_02624.jpg"><img
                        src="images/gjeravica.jpg" width=400px height=300px></a></div>
        <div class="content">
            <h2>Gjeravica, Kosove</h2>
            <p>Join us and visit the highest peak of Kosova
            </p>
        </div>
    </div>
</div>
</div>

<?php include "server.php" ?>

<div class="wrapper">
    <?php echo $comments; ?>
    <form class="comment_form">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="comment">Comment:</label>
            <textarea name="comment" id="comment" cols="30" rows="5"></textarea>
        </div>
        <button type="button" id="submit_btn">POST</button>
        <button type="button" id="update_btn" style="display: none;">UPDATE</button>
    </form>
</div>
</body>
</html>
<!-- Add JQuery -->
<script src="jquery.min.js"></script>
<script src="scripts.js"></script>


</body>
<footer>
    <?php include('views/footer.php'); ?>
</footer>
</html>
