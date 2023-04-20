<?php

$conn=mysqli_connect("localhost", "parul", "1234", "bca");

	if($conn){
			echo "connected <br />";
	}else{
			echo "not connected <br />";
	}

	echo "<br />";	
	
		

	$sql = "create table student(sid int not null AUTO_INCREMENT PRIMARY KEY, sname varchar(20), sadd varchar(22), scontact int(10), scity varchar(10));";

 	
	
	
	$result = mysqli_query($conn,$sql);
	

	if ($result){
			echo "Data inserted succesfully <br />";
	}else{
			echo Data insersion failed <br />";
	}

?>