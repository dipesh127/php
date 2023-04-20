<?php


	$conn=mysqli_connect("localhost","parul","1234","bca");

	if(isset($_GET["submit"])){
		$name = $_GET["name"];
		$city = $_GET["city"];
		$contact=$_GET["contact"];
		$address=$_GET["address"];



	$sql="INSERT INTO 'student'('name','address','contact','city') VALUES('".$name."','".$address.",'".$contact."'','".$city."')";
	$result = mysqli_query($conn,$sql);
	

	if ($result){
			echo "Data inserted succesfully <br />";
	}else{
			echo "Data insersion failed <br />";
	}

	}



?>




<html>
<body>
<form action = "insertdata.php" method = "get">
Student name : <input type="text" name= "name"><br/>
Address : <input type="text" name="address"><br/>
Contact : <input type="number" name="contact"><br/>
City : <input type= "text" name="city"><br/>



<input type="submit" name= "submit">
</form>
</body>

</html>