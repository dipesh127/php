<?php

// function for checking prime number
function checkPrime($num){

	if($num % 2 ==0){
	return  0;
	}
	for ($i=2; $i<=$num/2; $i++){
		if($num % $i ==0){

			return 0;

		}
			
	}
	return 1;
}


$num =7;
$flag = checkPrime($num);
if($flag == 1){
	echo "Prime number";
}else{

	echo" non Prime";
}






?>