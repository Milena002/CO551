<?php	

	// Connect to server and select database

    $mysqli = new mysqli("localhost","root","","db2_22143664");

    //update query

    $sql = "UPDATE test SET name = '{$_POST["txtname"]}' ,
            email= '{$_POST["txtemail"]}' , 
            phone_number = '{$_POST["txttelno"]}'
             WHERE ID = '{$_GET["id"]}';";
	// Execute query
	$result = $mysqli -> query($sql);

   // echo $sql;

    if($result){
      // echo "Saved succesfully!";
    }  
    
    header('Location: wk6ex2.php');
?>
  
    <html>
    <body>

    <form action="wk6ex4.php?id=<?php echo $_GET['id']; ?>" method="post">

	<input type=submit name=btnremove value="Remove"/>
	
</form>

</body>
</html>
