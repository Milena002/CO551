<html>
  <head><title>Select size page</title></head>
    <body>
      <form action="selectcolour.php"  method="post">
	    Select the size for the
    <?php echo $_POST["selqty"] ?> widgets you are ordering
   	<select name="selsize">
   	  <option>Small</option>
	  <option>Medium</option>
	  <option>Large</option>
	  <option>Extra large</option>
        </select>
        <br/><br/>
        <input type="hidden" name="hdselqty" value="<?php echo $_POST['selqty']?>"/>
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>	