<!DOCTYPE html>
<!--     11/19/2023 Sufia Khan
     Readable login page -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    session_start();
    
    Require "../connect_db.php";
    Require "header.php";

    echo "<h3> Log In! </h3>";

    // Initialize variables from the form
    if (isset($_POST['uname'])) { 
        $uname = $_POST['uname'];
    } elseif (isset($_COOKIE['uname'])) {
        $uname = $_COOKIE['uname'];
    } else {
        $uname = "";
    }
    SETCOOKIE('uname', $uname);

    if (isset($_POST['pword'])) { 
        $pword = $_POST['pword'];
    } elseif (isset($_COOKIE['pword'])) {
        $pword = $_COOKIE['pword'];
    } else {
        $pword = "";
    }
    SETCOOKIE('pword', $pword);

    // Input Validation
    $pattern = '/^(?=.*[!@#$%^&*-])$/';
    $error_message = "";
    // Have both the username and password been entered?
        if ($uname == "") { $error_message = "<p style='color: red;'> Enter a username";}
        if ($pword == "") { $error_message = "<p style='color: red;'> Enter a password";}
    // Make sure input is only alphanumeric
        if(preg_match($pattern, $pword)) { $error_message = "<p style='color: red;'> Invalid username/password";}
       # if(preg_match($pattern, $uname)) { $error_message = "<p style='color: red;'> Invalid username/password";}


    // Verifying with MySQL
    if ($error_message == "") {
        $q = "SELECT * FROM t3_users WHERE user_name = '" . $uname . "' AND password = '" . $pword . "'";
        $r = mysqli_query($dbc, $q);
        if ($r) {
            // Set session variable if no error
            $_SESSION["login"] = "logged in";

            //$_SESSION["user_type"] = "SELECT user_type FROM t3_users WHERE username = '" . $uname . "'";
            //$sql = mysqli_query($dbc, $q);
            //while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
               // $usertype = $row[0];
           // }
           
            echo "<br> " . $_SESSION["login"] . " $uname successfully logged in!";
        } else { 
            echo "<br> Wrong Username/Password";
        }  	
    }

    // Code to display form if not logged in or credentials are incorrect
    if (($_SERVER["REQUEST_METHOD"] == "GET") || (isset($error_message)))  {
        echo "<form action='' method='POST'>";
        echo "<br> Enter your username <input type='text' name='uname' value='$uname'>";
        echo "<br> Enter your password <input type='password' name='pword' value='$pword'>";
        echo "<br> <input type='submit' value='Submit!' style='background-color: blue; color: white;'>";
        echo "</form>";
    }

    # outputs a still logged in message if page is still active after user logs in
    if (($_SERVER["REQUEST_METHOD"] == "GET") && (!(isset($error_message))) && (isset($_SESSION['active_user']))) {
        $_SESSION['login'] = "logged in";
        echo "<br> User " . $_SESSION['active_user'] . " is still succesfully logged in!";
    }

    echo "<br><br><br>";
    echo "<button style='background-color: pink; color: black; border-radius: 10px;'>";
    echo "<a href='logout.php'> Log out? </a>";
    echo "</button>";

    include '../errorhandler.php';
    include '../footer.php';
    ?>
</body>
</html>