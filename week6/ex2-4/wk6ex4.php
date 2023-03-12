<?php	

	// Connect to server and select database

    $mysqli = new mysqli("localhost","root","","db2_22143664");

    //delete query

    $sql = "DELETE from test WHERE /*name = '{$_POST["txtname"]}' ,
            email = '{$_POST["txtemail"]}' , 
            phone_number = '{$_POST["txttelno"]}',*/
            ID = '{$_GET["id"]}';";

	// Execute query
	$result = $mysqli -> query($sql);


   // echo $sql;

    if($result){
      // echo "Deleted succesfully!";
    }

    header('Location: wk6ex2.php');
?>