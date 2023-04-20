<?php

$conn=mysqli_connect("localhost","parul","1234","bca");

	if($conn){

		echo "connected";

	}else{



		echo "not connected";
	}

echo "<br/>";
		

	$sql = 'CREATE TABLE student(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, name VARCHAR(20),address VARCHAR(30),contact INT(10),city VARCHAR(20))';

 	
	
	
	$result = mysqli_query($conn,$sql);
	

	if ($result){
			echo "Data inserted succesfully <br />";
	}else{
			echo "Data insersion failed <br />";
	}

?>