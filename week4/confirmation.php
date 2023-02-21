<?php
session_start();
$qty = $_SESSION['selqty'];
$selsize = $_SESSION['selsize'];
$price = 0;

switch ($selsize) {
   case "Small":
     $price = 15.75;
         break;
   case "Medium":
     $price = 16.75;
     break;
   case "Large":
     $price = 17.75;
     break;
   case "Extra Large":
     $price = 18.75;
     break;
   default:
     echo "No size selected!";
 }

$total = $qty * $price;
   echo "<h1> Order Confirmation </h1>";
   echo "<h2> Your order qty:  $_SESSION[selqty] </h2>";
   echo "<h2> Selected size:  $_SESSION[selsize] </h2>";
   echo "<h2> Selected colour: $_POST[selcolour]</h2>";
   echo "<h2> Total price: £ $total </h2>";
?>

