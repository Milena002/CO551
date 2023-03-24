<?php
  
  $conn = mysqli_connect("localhost","22143664","mysqluser","db1_22143664");

$sql = "select id from monster;";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

echo "<img src='getjpg.php?id=" . $row['id']. "'/>";

mysqli_close();
?>
