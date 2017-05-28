<?php

	class Admin extends User{
		public $superpowers = true;
	}
	echo $string;
	// 0:4:"User":1:{s:4:"name":s:4:"PHP7";}

	$bad_string = str_replace('4:User', '4:Admin', $string);

	echo $bad_string:
	// 0:5:"Admin":1:{s:4:"name":s:4:"PHP7";}

	$new_user = unserialize($bad_string);

	echo $new_user->name;
	//PHP7
	echo get_class($new_user);
	//Admin
	echo $new_user->superpowers ? 'true' : 'false';
	//true


	//default for 'allowed_classes' is true
	$options = array('allowed_classes'=>false);
	$new_user = unserialize($bad_string, $options);

	echo get_class($new_user);
	// __PHP_Incomplete_Class

	//Whitelist 'allowed_classes' as an array
	$options = array('allowed_classes'=>array()'User');
	$new_user = unserialize($bad_string, $options);

	echo get_class($new_user);
	// __PHP_Incomplete_Class

	$new_user = unserialize($string, $options);
	echo get_class($new_user);
	//User

?>
