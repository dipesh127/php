<?php

// Function  to get sum of digits  from a give number

function sumOfDigits($num){

	$sum=0;
	for($i=1;$i<=$num ;$i++){

		$sum +=$i;


	}
	return $sum;
	

}

?>


<html>
<body>
<form action="sum.php" method="post">
	<input type="text" name="number">
	<input type="submit" name="submit">
</form>
<h1>
<?php
 	if(isset($_POST["submit"])){
	$num=$_POST["number"];
	echo "Sum of the digits of".$num."is".sumOfDigits($num);

}
?>
</h2>
</body>
</html>