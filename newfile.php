<html>
<body>
<form action ="newfile.php" method="post">
num1:<input type="text" name="num1"></br>
num2:<input type="text" name="num2"></br>
num3:<input type="text" name="num3"></br>
<input type="submit" name="submit"></br>



</form>





<?php

	if(isset($_POST['submit'])){
	$num1=$_POST["num1"];
	$num2=$_POST["num2"];
	$num3=$_POST["num3"];
	if($num1>$num2 && $num1>$num3){
		echo "$num1 is biggest";
	}
	elseif($num2>$num3 && $num2>$num1){
		echo "$num2 is biggest";
	}
	else{
		echo "$num3 is biggest";
	}
	}
?>


</body>
</html>