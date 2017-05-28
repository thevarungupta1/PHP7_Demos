<?php
	// Php5
	class Logger{
		public function log($msg){
			echo $msg;
		}
	}

	$logger = new Logger();
	$app->set_logger($logger);

	$app->set_logger(new Logger());

	// Php7
	$logger = new class{
		public function log($msg){
			echo $msg;
		}
	}

	$app->set_logger($logger);


	$app->set_logger(new class{
		public function log($msg){
			echo $msg;
		}
	})


	
?>


