<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Out</title>
</head>
<body>
 
<?php
    session_start();

    Require "header.php";
    echo "<br>";
    
    session_destroy();

    echo "Logged out successfully";

    include "../footer.php";
?>
 
</body>
</html>