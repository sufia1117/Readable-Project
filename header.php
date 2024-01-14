<!DOCTYPE html>
<!--    header.php
    11/07/2023 SK Original Program
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <!--Google Material Icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    
    <!--Google Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mooli">

    <style>
        html {
            position: relative;
            min-height: 100%;
        }

        body {
			font-family: arial;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            background-color: #b3d0e9;
		}

        .slogan {
            float: right;
            margin-right: 15px;
            color: rgb(2, 50, 92);
            font-family: "Mooli";
        }

        #navbar {
            background-color: #449be7;
            position: absolute;
            width: 100%;
            float: right;
        }

        #navbar a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 48px;
        }

        #navbar a:hover {
            background-color: #66a9e4;
            color: white;
            transition: background-color 0.15s;
        }

        .search input[type=text] {
            margin-top: 20px;
            width:300px;
            height:25px;
            border-radius:50px;
            border: none;
            text-align: center;
        }

        .search {
            float:right;
            margin:7px;
        }

        #search {
            margin-top: 15px;
            background-color: #449be7;
            color: #0a0a0a;
            float: right;
            padding: 5px 10px;
            margin-right: 16px;
            font-size: 12px;
            border: none;
            cursor: pointer;
        }

        #search:hover {
            color: rgb(255, 255, 255);
            transition: color 0.15s;
        }
    </style>
</head>
<body>
<?php
// session_start();
?>
<a href="index.php">
        <img src='https://i.postimg.cc/L4tyqWcn/Screenshot-2023-09-22-161347-removebg-preview.png' alt='Readable' style="height: 80px; width: 80px;"/>
    </a> 

    <h3 class="slogan">Books should be ReadAble!</h3>

    <div id="navbar">
        <a href="login.php">
            <i class="material-symbols-outlined" alt="Login" style="font-size: 30px;">account_circle</i>
        </a>

        <a href="404.php">
            <i class="material-symbols-outlined" alt="cart" style="font-size: 30px;">shopping_cart</i>
        </a>

        <a href="index.php">
            <i class="material-symbols-outlined" alt="home" style="font-size: 30px;">home</i>
        </a>

        <a href="products.php" style="font-size: 17px; margin-top: 20px;">ALL Books</a>
        <a href="404.php" style="font-size: 17px; margin-top: 20px;">New Today!</a>
        <a href="404.php" style="font-size: 17px; margin-top: 20px;">Genres</a>
        <a href="about.php" style="font-size: 17px; margin-top: 20px;">About Us</a>
        <a href="mailto:readable@email.com" style="font-size: 17px; margin-top: 20px;">Contact Us</a>
        <a href="disclaimer.php" style="font-size: 17px; margin-top: 20px;">Disclaimer</a>
        <a href='admin.php' style='font-size: 17px; margin-top: 20px;'>Admin</a>

        <!-- if session user type is admin, show this on header -->
        <?php
        //if ($_SESSION["user_type"] == 'ADMIN') {
            //echo "<a href='admin.php' style='font-size: 15px; margin-top: 20px;'>Admin</a>";}
        ?>

        <div class="search">
            <form action="#">
                <input type="text" placeholder="Search Books" name="search">
                <button type="submit" id="search">
                    <i class="material-symbols-outlined">search</i>
                </button>
            </form>    
        </div>
    </div>
    <br><br><br><br><br>

</body>
</html>