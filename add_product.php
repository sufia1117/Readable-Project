<!DOCTYPE html>
<!---   a12-khan.php 
        11/14/2023 SK Original Program
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Product</title>
</head>
<body>
    <?php
        require "header.php";
        require "../connect_db.php";

        echo "<h2> Add a new product </h2>";

        // Get the passed fields from the form
        if (isset($_POST['product id'])) {
            $prodID = $_POST['product id'];
        } else {
            $prodID = "";
        }

        if (isset($_POST['supplier id'])) {
            $supplierID = $_POST['supplier id'];
        } else {
            $supplierID = "";
        }

        if (isset($_POST['book'])) {
            $book = $_POST['book'];
        } else {
            $book = "";
        }

        if (isset($_POST['genre'])) {
            $genre = $_POST['genre'];
        } else {
            $genre = "";
        }

        if (isset($_POST['author'])) {
            $author = $_POST['author'];
        } else {
            $author = "";
        }

        if (isset($_POST['publisher'])) {
            $publisher = $_POST['publisher'];
        } else {
            $publisher = "";
        }

        if (isset($_POST['price'])) {
            $price = $_POST['price'];
        } else {
            $price = "";
        }

        if (isset($_POST['quantity sold'])) {
            $qty_sold = $_POST['quantity sold'];
        } else {
            $qty_sold = "";
        }

        if (isset($_POST['stock'])) {
            $stock = $_POST['stock'];
        } else {
            $stock = "";
        }

        if (isset($_POST['active'])) {
            $active = $_POST['active'];
        } else {
            $active = "";
        }

        // Input Validation
        $error_message = "";
        if ($prodID == "") { $error_message = "<p style='color: red;'> Enter a product ID";}
        if ($supplierID == "") { $error_message = "<p style='color: red;'> Enter a supplier ID";}
        if ($book == "") { $error_message = "<p style='color: red;'> Enter a book title";}
        if ($genre == "") { $error_message = "<p style='color: red;'> Enter a genre";}
        if ($author == "") { $error_message = "<p style='color: red;'> Enter an author";}
        if ($publisher == "") { $error_message = "<p style='color: red;'> Enter a publisher";}
        if ($price == "") { $error_message = "<p style='color: red;'> Enter a price";}
        if ($qty_sold == "") { $error_message = "<p style='color: red;'> Enter the quantity sold";}
        if ($stock == "") { $error_message = "<p style='color: red;'> Enter the number of stock left";}
    
        // Add code to insert a row into the table
        $q = "INSERT INTO t3_products VALUES ($prodID, $supplierID, $book, $genre, $author, $publisher, $price, $qty_sold, $stock, $active)";
        $r = mysqli_query ($dbc, $q);       # This runs query, using $dbc

        if ($r) {
            echo "<p style='color: red;'>The insert worked!</p>";
        } elseif ($r == '') {
            echo "";
        } else {
            echo "<p style='color: red;'>The insert failed</p>";
        }

        // Form to add a new product
        echo "<form action='' method='POST'>";
        echo "<br> Enter Product ID: <input type='number' name='product id' value='$prodID' maxlength=4 minlength=4 size=4>";
        echo "<br> Enter Supplier ID: <input type='number' name='supplier id' value='$supplierID'>";
        echo "<br> Enter Book Title: <input type='text' name='book' value='$book' maxlength=30>";
        echo "<br> Enter Genre: <input type='text' name='genre' value='$genre' maxlength=30>";
        echo "<br> Enter Author: <input type='text' name='author' value='$author' maxlength=30>";
        echo "<br> Enter Publisher: <input type='text' name='publisher' value='$publisher' maxlength=30>";
        echo "<br> Enter Price: <input type='number' name='price' value='$price' maxlength=7 step='0.01'>";
        echo "<br> Enter Quantity Sold: <input type='number' name='quantity sold' value='$qty_sold'>";
        echo "<br> Enter Stock Left: <input type='number' name='stock' value='$stock'>";
        echo "<br> Is the product still active?: <input type='radio' name='active' value='Y'> Y";
                                           echo "<input type='radio' name='active' value='N'> N ";
        echo "<br><input type='submit' value='Process' style='background-color: blue; color: white;'>";
        echo "</form>";

        include "../footer.php";
    ?>
    
</body>
</html>