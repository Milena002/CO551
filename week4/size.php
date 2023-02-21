<html>
  <head><title>Select size page</title></head>
    <body>
      <?php session_start();
      $_SESSION['selqty'] = $_POST['selqty'];?>
      <form action="selectcolour.php"  method="post">
	    Select the size for the <?php
    echo $_SESSION['selqty'] ?> widgets you are ordering
   	<select name="selsize">
   	<option>Small</option>
	   <option>Medium</option>
	   <option>Large</option>
	  <option>Extra large</option>
         </select>
        <br/><br/>
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>	