<!DOCTYPE html>
<!--    products.php
    11/07/2023 SK Original Program
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <?php
        require "header.php";
        require "../connect_db.php";

        // Get the passed direction type from the input form
        if (isset($_POST['direction'])) {
            $direction_type = $_POST['direction'];
        } else {
            $direction_type = "";
        }


        // Get the passed sort type from the input form
        if (isset($_POST['sort'])) {
            $sort_type = "ORDER BY " . $_POST['sort'];
        } else {
            $sort_type = "";
        } 

        // Append both variables to make a valid order by statement
        $order = $sort_type . " " . $direction_type;

        echo "<p> Sort By: ";
        echo "<form action='' method='POST'>";
        echo "<input type='radio' name='sort' value='title'> Title"; 
        echo "<input type='radio' name='sort' value='genre'> Genre "; 
        echo "<input type='radio' name='sort' value='author'> Author "; 
        echo "<input type='radio' name='sort' value='publisher'> Publisher ";
        echo "<input type='radio' name='sort' value='price'> Price ";
        echo "<input type='radio' name='direction' value='ASC'> Ascending ";
        echo "<input type='radio' name='direction' value='DESC'> Descending ";
        echo "<br><input type='submit' value='Sort it!' style='color: white; background-color: blue;'>";
        echo "</form>";

        // Display the products table in an HTML table format
        $q = "SELECT * FROM t3_products " . $order;
        $r = mysqli_query ($dbc, $q);       # This runs query, using $dbc

        // loop through each row of returned data
        if ($r) {
            echo "<h4> Our Books! </h4>";
            echo "<table border=1>";
                    echo "<th> Title </th>";
                    echo "<th> Genre </th>";
                    echo "<th> Author </th>";
                    echo "<th> Publisher </th>";
                    echo "<th> Price </th>";
            while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
                    echo "<tr>";
                        echo "<td> " . $row[2] . "</td>";
                        echo "<td> " . $row[3] . "</td>";
                        echo "<td> " . $row[4] . "</td>";
                        echo "<td> " . $row[5] . "</td>";
                        echo "<td> " . $row[6] . "</td>";
                    echo "</tr>";
            }
            echo "</table>";
        }

        echo "<br>";

        // If session user type is employee, allow this button to show
        echo "<button style='background-color: #ff6289; color: white; border-radius: 10px;'>";
            echo "<a href='add_product.php'> Add a product </a> ";
        echo "</button>";
        
        include "../footer.php";
    ?>
    
</body>
</html>