<?php

// Function  to get sum of digits  from a give number

function rev_str($str){


	for($i=strlen($str);$i>=0;$i--){

		echo $str[$i];
	}	

}

?>


<html>
<body>
<form action="revstring.php" method="post">
	<input type="text" name="string">
	<input type="submit" name="submit">
</form>
<h1>
<?php
 	if(isset($_POST["submit"])){
	$str=$_POST["string"];
	//rev_str($str);
	echo strrev($str);
}
?>
</h2>
</body>
</html>