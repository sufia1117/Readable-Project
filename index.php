<!DOCTYPE html>
<!-- Sufia Khan Homepage -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <style>
        #books {
            float: left;
            margin: 10px;
        }

        #qr {
            float: left;
            margin: 10px;
        }

        .main_text {
            font-family: Arial, Helvetica, sans-serif;
            margin: 20px;
            text-align: center;
        }

        .home_gallery {
            text-align: center;
        }

        .gallery {
            display: inline-block;
            border: 1px solid hsl(0, 0%, 60%);
            margin: 5px;
            width: 150px;
        }

        .gallery .description {
            padding: 10px;
            text-align: center;
        }

        .gallery:hover {
            border: 1px solid hsl(0, 0%, 20%);
        }

        .gallery img {
            width: 150px;
            height: 170px;

        }


        .footer {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            overflow: hidden;
            text-align: center;
        }
    </style>
</head>
<body>
        <?php
        require "header.php";
        ?>

    <img id="books" src="books.avif" alt="Books on shelf" style="height: 200px; width: 200px;">
    <img id="qr" src="bn_qr.png" alt="qr code" style="height: 200px; width: 200px;">

    <p class="main_text"> Welcome to ReadAble! Your one-stop-shop for books of all genres. </p>

    <div class="home_gallery">
        <div class="gallery">
            <a target="_blank" href="">
                <img src="HP.jpg" alt="Harry Potter and the Goblet of Fire" >
            </a>
            <a target="_blank" href="">
                <img src="lost_hero.JPG" alt="The Lost Hero">
            </a>
            <a href=""><div class="description">Popular Picks</div></a> 
        </div>
    
        <div class="gallery">
            <a target="_blank" href="">
                <img src="php_dummies.jpg" alt="PHP MySQL for Dummies">
            </a>
            <a target="_blank" href="">
                <img src="prag_prog.jpg" alt="The Pragmatic Programmer">
            </a>
            <a href=""><div class="description">Recommended</div></a>
        </div>
    
        <div class="gallery">
            <a target="_blank" href="">
                <img src="html_dummies.jpg" alt="HTML for Dummies">
            </a>
            <a target="_blank" href="">
                <img src="light_thief.jpg" alt="The Lightning Thief">
            </a>
            <a href=""><div class="description">Your Orders</div></a>
        </div>
    
    </div>

    <?php
        REQUIRE "../connect_db.php";
        INCLUDE "../footer.php";
    ?>
</body>
</html>