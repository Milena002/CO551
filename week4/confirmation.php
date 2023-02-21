<?php
$qty = $_POST['hdselqty'];
$price = $_COOKIE['price'];
$total = $qty * $price;
   echo "<h1> Order Confirmation </h1>";
   echo "<h2> Your order qty:  $_POST[hdselqty] </h2>";
   echo "<h2> Selected colour: $_POST[selcolour]</h2>";
   echo "<h2> Total price: £ $total </h2>";
?>

