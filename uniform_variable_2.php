<?php

	$name = 'car';
	$car = array('name' => 'Jetta', 'year' => 2010);

	echo $$name['name'];
	// Php5: Warning: Illegal string offset 'name'

	// Php7: Jetta
	

?>

