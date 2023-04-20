<?php

// function for checking palindrome or not


function check_Palindrome($str){


	$rev_str= strrev($str);
		if ($rev_str == $str){

			echo " String is Paliondrome";

			
		}
		else{

			echo "Non Palindrome";
			
		}


}

check_palindrome("hello");
?>