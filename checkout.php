<?php 
session_start();
$total = $_SESSION['total'];

?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Checkout Page </title>
    </head>
    
    <h1> Checkout </h1>
    <body>
        
        <h2> Purchase amount</h2>
        <?php
        $total = round($total, 2);
        echo "Total amount of purchse : \$$total<p>";
        ?>
        
        <h3> Please enter your name and credit card information. </h3>
        <form method="post" action="validation.php">
            <label> Enter name on credit card: <label>
            <input type="text" name="name"> <br>
            <label> Enter credit card number: </label>
            <input type="number" name="num"> <br>
            <label> Enter credit card expiration date: </label>
            <input type="number" name="exp"> <br>
            <label> Enter credit card security code: </label>
            <input type="number" name="ccv"> <br>
            <input type="submit" name="submit">        
        </form>
        
    </body>
</html>

