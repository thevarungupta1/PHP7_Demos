<?php

	function hello_from($user){
		return $user->say_hello();
	}

	echo hello_from(NULL);
	//PHP 5: Fatal error: call to a member function
	// say_hello() on a non-object

	function hello_from($user){
		if(is_null($user)){
			throw new Exception('User id NULL');
		}
		return $user->say_hello();	
	}

	try{
		echo hello_from(NULL);
	}catch(Exception $e){
		echo "Rescue from: {$e->getMessage()}";
	}
	// PHP 5: Rescue from: User is NULL
?>