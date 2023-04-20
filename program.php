<?php

	if(isset($_REQUEST['submit'])){
	$name="un";
	$value =$_REQUEST['uname'];
	setcookie($name,$value);
	echo $_COOKIE['un'];


}



?>
<html>
<body>
<form>
	<input type="text" name="uname"></br>
	<input type= "submit" name="submit">
</form>
</body>
</html>