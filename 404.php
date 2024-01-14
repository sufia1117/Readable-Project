<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404: Page Not Found</title>

    <style>
        h1 {
            color: red;
            text-align: center;
        }

        p {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        REQUIRE "header.php";

        echo "<h1><b>404</b></h2>";
        echo "<p> Uh-Oh, seems like the page you're looking for is un-Reachable.
         Don't worry, you can browse our website to find other goodies!</p>";

         INCLUDE "../footer.php";
    ?>
    
</body>
</html>