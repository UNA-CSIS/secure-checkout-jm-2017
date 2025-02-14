<?php 
session_start();
$n_theBetrayals = $_POST["theBetrayals"];
$n_theNaturals = $_POST["theNaturals"];
$n_shatterMe = $_POST["shatterMe"];
$n_fourthWing = $_POST["fourthWing"];
$n_inherGames = $_POST["inherGames"];
$n_gamesGodsPlay = $_POST["gamesGodsPlay"];
$n_midnightSun = $_POST["midnightSun"];
$n_beCrea = $_POST['beCrea'];

$ntb = $n_theBetrayals = 16.99;
$ntn = $n_theNaturals * 15.99;
$nsm = $n_shatterMe * 15.99;
$nfw = $n_fourthWing * 20.99;
$nig = $n_inherGames * 12.99;
$nggp = $n_gamesGodsPlay * 19.99;
$nms = $n_midnightSun * 25.99;
$nbc = $n_beCrea * 20.99;

$subtotal = $ntb + $ntn + $nsm + $nfw + $nig + $nggp + $nms + $nbc;
$tax = $subtotal * 0.09;
$total = $subtotal + $tax;

$_SESSION['subtotal'] = $subtotal;
$_SESSION['tax'] = $tax;
$_SESSION['total'] = $total;
?>

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title> Cart Page </title>
    </head>
    
    <h1> Total amount </h1>
    <body>
        
        <?php
        echo "Your cart subtotal is \$$subtotal<p>"; 
        $tax = round($tax, 2);
        echo "Your subtotal tax is \$$tax<p>";
        $total = round($total, 2);
        echo "Your total purchase amount is \$$total<p>";
        ?>
        
        <form method="post" action="checkout.php">
            <input type="submit" value="Confirm">           
        </form> <br>
        
         <?php 
        $keepShop = "http://localhost/creditcard/index.php";
        echo "<a href='$keepShop'> Click here to go back to shopping. </a><p>";
        ?>

        
    </body>
</html>
