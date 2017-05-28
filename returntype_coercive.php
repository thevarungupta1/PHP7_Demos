<?php
   
   function sum($a, $b) : int{
   		return $a + $b;
   }

   echo gettype(sum(2,3));
   // integer

   echo gettype(sum("2","3"));
   // integer

   echo gettype(sum(2.0,3.0));
   // integer
?>	

