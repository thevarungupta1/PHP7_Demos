<?php
   function sum($a, $b){
   	echo $a ." ".gettype($a) ." + ";
   	echo $b ." ".gettype($b) ." + ";
   	$result = $a + $b;
   	echo $result ." ".gettype($result);
   }

   sum(2,3);
   // 2 integer + 3 integer = 5 integer

   sum("2","3");
   // 2 string + 3 string = 5 integer

   sum(2.0,3.0);
   // 2 double + 3 double = 5 double
?>	

