<?php

	$array = array('a','b','c');

	$string = serialize($array);
	echo $string;
	// a:3:{i:0;s:1:"a";i:1;s:1:"b";i:2;s:1:"c";}

	$new_array = unserialize($string);
	echo $new_array[2];
	// c
	
?>
