<?php
   declare(strict_type=1);
   function sum(int $a, int $b){
   	echo $a ." ".gettype($a) ." + ";
   	echo $b ." ".gettype($b) ." + ";
   	$result = $a + $b;
   	echo $result ." ".gettype($result);
   }

   sum(2,3);
   // 2 integer + 3 integer = 5 integer

   sum("2","3");
   // TypeError: Argumant must be of the type integer, string given

   sum(2.0,3.0);
   // TypeError: Argumant must be of the type integer, float given
?>	

