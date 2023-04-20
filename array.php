<?php

	$a=array("ramesh","suresh","rekesh");
	echo $a[0]."<br>";
	echo count($a)."<br>";
	$a[count($a)]="mahesh";
	$a[count($a)]="xyz";


	echo "<pre>";
	print_r($a);
	echo count($a)."<br>";



	array_pop($a);
	echo current($a)."<br>";
	echo next($a)."<br>";
	echo end($a)."<br>";
	echo prev($a)."<br>";

	sort($a);
	echo "<pre>";
	print_r($a);
	rsort($a);
	echo"<pre>";
	print_r($a);


	$student=array(
		"student1"=>18,
		"student2"=>16,
		"student3"=>19,



	);
	echo"<pre>";
	print_r($student);
	asort($student);
	echo"<pre>";
	print_r($student);
?>