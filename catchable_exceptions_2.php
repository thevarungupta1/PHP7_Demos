<?php

	function hello_from($user){
		return $user->say_hello();
	}

	try{
		echo hello_from(NULL);
	}catch(Error $e){
		echo "Rescue from: {$e->getMessage()}";
	}
	// PHP 7: Rescue from: Call to a member function
	// say_hello() on null
?>
