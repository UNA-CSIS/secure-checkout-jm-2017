<?php
session_start();
$_SESSION['num'] = $_POST['num'];
$_SESSION['submit'] = $_POST['submit'];

$num = $_POST['num'];
$submit = $_SESSION['submit'];
?>

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
        function validation($num) {
            
            global $type;

            $cardNum = array(
                "Mastercard" => "/^5[1-5][0-9]{14}$/",
                "Visa" => "/^4[0-9]{12}(?:[0-9]{3})?$/",
                "Amex" => "/^3[47][0-9]{13}$/",
            );

            if (preg_match($cardNum['Mastercard'], $num)) {
                $type = "Mastercard";
                echo 'Mastercard validated. <p>';
                echo 'Thank you for your purchase. <p>';
            } else if (preg_match($cardNum['Visa'], $num)) {
                $type = "Visa";
                echo 'Visa card validated. <p>';
                echo 'Thank you for your purchase. <p>';
            } else if (preg_match($cardNum['Amex'], $num)) {
                $type = "Amex";
                echo 'Amex card validated. <p>';
                echo 'Thank your for your purchse. <p>';
            } else {
                echo 'Invalid card number entered.<p>';
            }
        }

        validation($num);

        $keepShop = "http://localhost/creditcard/index.php";
        echo "<a href='$keepShop'> Click here to go back to shopping. </a><p>";
        ?>
        
    </body>
</html>
