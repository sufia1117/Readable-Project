<!DOCTYPE html>
<!--    a910a-khan.php
    11/01/2023 SK Original Program
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <?php
        require "header.php";
        require "../connect_db.php";

        if (isset($_POST['password'])) { 
            $password = $_POST['password'];
        } else {
            $password = "";
        }

        echo "<form action='' method='POST'>";
        echo "<br> Enter the special admin password: <input type='password' name='password' value='$password'>";
        echo "<br><input type='submit' value='Submit' style='background-color: blue; color: white;'>";
        echo "</form><br>";

        if ($password == 'ADMINPWX') {

            echo "Tables:<br>";
            $q = "SHOW TABLES";                 # We put query in $q
            $r = mysqli_query ($dbc, $q);       # This runs query, using $dbc

            // loop through each row of returned data\
            if ($r) {
                while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
                    echo "$row[0]<br>";
                }
            }

            echo "<br>";

            // Explain the Courses table in an HTML table format
            $q = "EXPLAIN courses";
            $r = mysqli_query ($dbc, $q);       # This runs query, using $dbc

            // loop through each row of returned data
            if ($r) {
                echo "<h4> Courses </h4>";
                echo "<table border=1>";
                        echo "<th> Column </th>";
                        echo "<th> Type </th>";
                while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
                        echo "<tr>";
                            echo "<td> " . $row[0] . "</td>"; 
                            echo "<td> " . $row[1] . "</td>";
                        echo "</tr>";
                }
                echo "</table>";
            }

            // Explain the Prints table in an HTML table format
            $q = "EXPLAIN prints";
            $r = mysqli_query ($dbc, $q);       # This runs query, using $dbc

            // loop through each row of returned data
            if ($r) {
                echo "<h4> Prints </h4>";
                echo "<table border=1>";
                        echo "<th> Column </th>";
                        echo "<th> Type </th>";
                while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
                        echo "<tr>";
                            echo "<td> " . $row[0] . "</td>"; 
                            echo "<td> " . $row[1] . "</td>";
                        echo "</tr>";
                }
                echo "</table>";
            }

            // Explain the Customers table in an HTML table format
            $q = "EXPLAIN t3_customers";
            $r = mysqli_query ($dbc, $q);       # This runs query, using $dbc

            // loop through each row of returned data
            if ($r) {
                echo "<h4> t3_customers </h4>";
                echo "<table border=1>";
                        echo "<th> Column </th>";
                        echo "<th> Type </th>";
                while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
                        echo "<tr>";
                            echo "<td> " . $row[0] . "</td>"; 
                            echo "<td> " . $row[1] . "</td>";
                        echo "</tr>";
                }
                echo "</table>";
            }

            // Explain the Users table in an HTML table format
            $q = "EXPLAIN t3_users";
            $r = mysqli_query ($dbc, $q);       # This runs query, using $dbc

            // loop through each row of returned data
            if ($r) {
                echo "<h4> t3_users </h4>";
                echo "<table border=1>";
                        echo "<th> Column </th>";
                        echo "<th> Type </th>";
                while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
                        echo "<tr>";
                            echo "<td> " . $row[0] . "</td>"; 
                            echo "<td> " . $row[1] . "</td>";
                        echo "</tr>";
                }
                echo "</table>";
            }

            // Explain the Products table in an HTML table format
            $q = "EXPLAIN t3_products";
            $r = mysqli_query ($dbc, $q);       # This runs query, using $dbc

            // loop through each row of returned data
            if ($r) {
                echo "<h4> t3_products </h4>";
                echo "<table border=1>";
                        echo "<th> Column </th>";
                        echo "<th> Type </th>";
                while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
                        echo "<tr>";
                            echo "<td> " . $row[0] . "</td>"; 
                            echo "<td> " . $row[1] . "</td>";
                        echo "</tr>";
                }
                echo "</table>";
            }

            // Explain the Suppliers table in an HTML table format
            $q = "EXPLAIN t3_suppliers";
            $r = mysqli_query ($dbc, $q);       # This runs query, using $dbc

            // loop through each row of returned data
            if ($r) {
                echo "<h4> t3_suppliers </h4>";
                echo "<table border=1>";
                        echo "<th> Column </th>";
                        echo "<th> Type </th>";
                while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
                        echo "<tr>";
                            echo "<td> " . $row[0] . "</td>"; 
                            echo "<td> " . $row[1] . "</td>";
                        echo "</tr>";
                }
                echo "</table>";
            }

        } elseif ($password == '') {
            echo "";
        } else {
            echo "<p>Wrong password, try again.";
        }

        INCLUDE "../footer.php";
    ?>
    
</body>
</html>