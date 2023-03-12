<?php	

	// Connect to server and select database
    $mysqli = new mysqli("localhost","root","","db2_22143664");

	$sql = "SELECT * from test";
    
	// Execute sql statement

    $result = $mysqli -> query($sql);
	
?>
<html>
<body>
<h1> Test table: </h1>
<?php

/*if (isset($_GET["msg"])){
    echo "<p>{$_GET["msg"]}</p>";
}*/
echo "<table border=1; width=20%>";

    echo "  <tr>
   <td>Name:     </td>
   <td> ID: </td><tr>";

    echo "</table>";

while ($row = mysqli_fetch_assoc($result))
{
    
    echo "<table border=1; width=20%>";
   echo "<tr><td> <a href=\"wk6ex2action.php?id=$row[ID]\">$row[name]</a></br> </td>
   <td>  $row[ID] </a></br> </td>
   </tr>";
    

     echo "</table>";
    	
}
?>
</body>
</html>
