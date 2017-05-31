<?php

    // Create a user
    $user = "Apple";

    // Create a Closure
    $greeting = function() use ($user) {
        echo "Hello $user";
    };

    // Greet the user
    $greeting(); // Returns "Hello Apple"


    /* // Real life usage : use of these types of functions is in routing requests
     Route::get('user/(:any)', function($name){
        return "Hello " . $name;
      });
    */


?>