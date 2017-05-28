<?php

	class User{
		public $name;
		public function __construct($name){
			$this->name = $name;
		}
	}
	$user = new User('PHP7');

	$string = serialize($user);
	echo $string;
	// 0:4:"User":1:{s:4:"name";s:4:"PHP7";}

	$new_user = unserialize($string);

	echo $new_user->name;
	// PHP7

?>
