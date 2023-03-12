<?php	

	// Connect to server and select database

    $mysqli = new mysqli("localhost","root","","db2_22143664");

    //update query

    $sql = "UPDATE test SET name = '{$_POST["txtname"]}' ,
            email= '{$_POST["txtemail"]}' , 
            phone_number = '{$_POST["txttelno"]}'
             WHERE ID = '{$_GET["id"]}';";

    //delete query

    $sql1 = "DELETE from test WHERE /*name = '{$_POST["txtname"]}' ,
            email = '{$_POST["txtemail"]}' , 
            phone_number = '{$_POST["txttelno"]}',*/
            ID = '{$_GET["id"]}';";

	// Execute query
	$result = $mysqli -> query($sql);
    $result = $mysqli -> query($sql1);

   // echo $sql;

    if($result){
      // echo "Deleted succesfully!";
    }

    header('Location: wk6ex2.php');
?>