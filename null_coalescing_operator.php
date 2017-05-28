<?php

	$value = $user_value ?? $default_value;

	//Same as:
	if(isset($user_value)){
		$value = $user_value;
	}else{
		$value = $default_value;
	}

	echo $page_title ?? 'My Cool PHP App';

	$username = $POST['username'] ?? 'guest';

	$value = $a ?? $b ?? $c ?? $d ?? $default;
?>


