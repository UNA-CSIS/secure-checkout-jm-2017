<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $name = $_POST["name"];
        $pwd = $_POST["pwd"];

        if ($pwd == $name) {
            echo "Welcome " . $name, "<p>";
            if (isset($_POST["remember "]) && $_POST["remember "] == "ON") {
                echo "Welcome <p>";
                $checkout = "http://localhost/creditcard/checkout.php";
                echo "<a href='$checkout'> Click here to continue to checkout. </a><p>";
            } else {
                $checkout = "http://localhost/creditcard/checkout.php";
                echo "<a href='$checkout'> Click here to continue to checkout. </a><p>";
            }
        } else {
            echo "Wrong username or password <p>";
            $keepShop = "http://localhost/creditcard/index.php";
            echo "<a href='$keepShop'> Invalid login information, please click here to"
                    . " go back to shopping. </a><p>";
        }
        ?>


    </body>
</html>
