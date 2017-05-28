<?php
   declare(strict_type=1);
   function sum($a, $b) : int{
   		return $a + $b;
   }

   echo gettype(sum(2,3));
   // int

   echo gettype(sum("2","3"));
   // int

   echo gettype(sum(2.0,3.0));
   // TypeError: Return value must be of the type integer, 
   // float returned
?>	

